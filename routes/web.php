<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EmpresaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register'=>false,'reset'=>false]);

Route::group(['middleware'=> 'auth'], function() {
    Route::get('/home', [ClienteController::class, 'index'])->name('home');

    Route::get('/', [ClienteController::class, 'index'])->name('home');
    Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
    Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
    Route::post('/cliente/store',[ClienteController::class, 'store'])->name('cliente.store');
    Route::get('/cliente/edit/{cliente}',[ClienteController::class,'edit'])->name('cliente.edit');
    Route::patch('/cliente/update/{cliente}',[ClienteController::class,'update'])->name('cliente.update');
    Route::get('/cliente/show/{cliente}',[ClienteController::class,'show'])->name('cliente.show');
    Route::delete('/cliente/eliminar/{cliente}',[ClienteController::class,'eliminar'])->name('cliente.eliminar');

    Route::resource('empresa',EmpresaController::class)->middleware('auth');

});


Auth::routes();

