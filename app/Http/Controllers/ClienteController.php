<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\ClienteRequest;
use Illuminate\Support\Facades\Hash;
class ClienteController extends Controller
{

    public function index(): View
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Si el usuario es administrador (ID 1), obtiene todos los clientes
        if ($user->id === 1) {
            $clientes = Cliente::all();
        } else {
            // Si no es administrador, obtiene solo su propio cliente
            $clientes = Cliente::where('user_id', $user->id)->get();
        }

        // Retorna la vista con los clientes
        return view('cliente.index', compact('clientes'));
    }




    public function create(): view
    {
        return view('cliente.create');
    }


    public function store(ClienteRequest $request): RedirectResponse
    {
        DB::beginTransaction();  // Iniciar la transacción

        try {
            // 1. Crear el usuario
            $user = User::create([
                'name' => $request->nombre,
                'email' => $request->email,
                'password' => Hash::make($request->password),  // Hash de la contraseña
            ]);

            // 4. Obtener los datos del formulario excepto el token
            $data = $request->except('_token');

            // Agregar el user_id al array de datos del cliente
            $data['user_id'] = $user->id;

            // 5. Manejar la imagen si es que se ha cargado
            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('uploads', 'public');
            }

            // 6. Crear el cliente con los datos proporcionados
            Cliente::create($data);

            // 7. Confirmar la transacción
            DB::commit();

            // 8. Redirigir con un mensaje de éxito
            return redirect()->route('cliente.index')->with('success', 'Cliente y usuario creados exitosamente');

        } catch (\Exception $e) {
            // Si ocurre un error, revertir la transacción
            DB::rollBack();

            // Redirigir con un mensaje de error
            return redirect()->back()->withErrors('Hubo un error al crear el cliente: ' . $e->getMessage());
        }
    }




    public function edit(Cliente $cliente)
    {


        return view('cliente.edit', compact('cliente'));
    }




     public function update(ClienteRequest $request, $id): RedirectResponse
     {
         // Validar que la nota existe
         $note = Cliente::findOrFail($id);
         // Validar que se haya cargado un archivo y que sea una imagen
         if ($request->hasFile('image') && $request->file('image')->isValid()) {
             // Almacenar la imagen utilizando el método store
             $filename = $request->file('image')->store('uploads', 'public');
             $note->image = $filename;
         }
         // Actualizar la nota
         $note->update([
             'nombre' => $request->nombre,
             'categoria_id' => $request->categoria_id
         ]);
         return redirect()->route('cliente.index')->with('success', 'Nota editada');
     }







    public function show(Cliente $cliente): View
    {
        return view('cliente.show', compact('cliente'));
    }
    public function eliminar(Request $request, Cliente $cliente): RedirectResponse
    {
        $cliente->delete();
        return redirect()->route('cliente.index')->with('danger', 'cliente eliminada ');;
    }
}
