<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;


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

Route::get('/RegistroUsu', [Controlador::class, 'mostrarFormulario'])->name('formulario');
Route::post('/guardarUsuario', [Controlador::class, 'guardarUsuario'])->name('guardar');
Route::get('/Olvide', [Controlador::class, 'mostrarAviso'])->name('AVISO');
Route::get('/', function () {
    return view('Login'); 
})->name('Login');
Route::get('/CCG', [Controlador::class, 'ConsultaCGeren'])->name('CCG');
Route::get('/CVG', [Controlador::class, 'ConsultaVGeren'])->name('CVG');
Route::get('/RCVG', [Controlador::class, 'ReportesCVGeren'])->name('RCVG');
Route::get('/CPA', [Controlador::class, 'ConsultaProduA'])->name('CPA');
Route::get('/CPC', [Controlador::class, 'ConsultaProduC'])->name('CPC');
Route::post('/guardarD', [Controlador::class,'guardarD'])->name('rulesModalAgreVen');
Route::post('/modificarD', [Controlador::class,'modificarD'])->name('rulesModalModiVen');
Route::get('/RegistroPro', [Controlador::class, 'mostrarFormularioPro'])->name('formularioPro');
Route::post('/EliminarD',[Controlador::class,'EliminarD'])->name('eliminarD');
Route::post('/rulesFormRegisProd', [Controlador::class,'rulesFormRegisProd'])->name('rulesFormRegisProd');
Route::post('/guardarP', [Controlador::class,'guardarP'])->name('rulesModalAgrePro');
Route::post('/modificarP', [Controlador::class,'modificarP'])->name('rulesModalModiPro');
Route::post('/EliminarP',[Controlador::class,'EliminarP'])->name('eliminarP');
Route::post('/guardarC', [Controlador::class,'guardarC'])->name('rulesModalAgreCom');
Route::post('/modificarC', [Controlador::class,'modificarC'])->name('rulesModalModiCom');
Route::post('/EliminarC',[Controlador::class,'EliminarC'])->name('eliminarC');

