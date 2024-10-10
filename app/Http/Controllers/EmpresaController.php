<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Empresa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class EmpresaController extends Controller
{
    public $search = '';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datos['empresas'] = Empresa::all();



         return view('empresa.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $cliente['clientes']=Cliente::paginate(10);
        return view('empresa.create',$cliente);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosEmpleado = request()->except(['_token']);

        Empresa::insert($datosEmpleado);
        return redirect('empresa')->with('mensaje','Empresa registrada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes['cliente']=Cliente::paginate(10);
        $item=Cliente::findOrfail($id);




        return view('empresa.edit' ,compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datosEmpleado = request()->except(['_token','_method']);
      //  Empresa::where('id','=',$id)->update($datosEmpleado);
        $item=Empresa::findOrfail($id);
        return view('empresa.edit',compact('item'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Empresa::findOrfail($id);

        return redirect('empresa')->with('mensaje','Borrado con exito');;
    }
}
