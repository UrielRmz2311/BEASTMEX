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

Route::get('/', function () {
    return view('Login');
});

Route::get('/prov', [Controlador::class,'FormularioProveedores'])->name('RutaProv');
Route::get('/conusu', [Controlador::class,'ConUsuarios'])->name('RutaConUsu');
Route::get('/conprov', [Controlador::class,'ConProveedores'])->name('RutaConProv');
Route::get('/tickven', [Controlador::class,'Ticketsventa'])->name('RutaTicketVen');
Route::get('/conti', [Controlador::class,'Conticket'])->name('RutaContick');
Route::get('/conticks', [Controlador::class,'ConTickets'])->name('RutaConTickets');

Route::post('/RegistroProv',[Controlador::class,'RegistroProv'])->name('registrar');
Route::post('/ModificarUsu',[Controlador::class,'ModificarUsu'])->name('modificar');
Route::post('/EliminarUsu',[Controlador::class,'EliminarUsu'])->name('eliminar');

