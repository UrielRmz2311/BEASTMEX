<?php

//Impoortaciones
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;
use App\Http\Controllers\ConsultadeticketdeventaController;
use App\Http\Controllers\ConsultadeventaController;
use App\Http\Controllers\GananciapormesController;
use App\Http\Controllers\GananciasdeventaController;
use App\Http\Controllers\OrdendecompraController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\TicketdeventaController;
use App\Http\Controllers\UsuarioController;






//Fin de importaciones

//Rutas Alan

Route::get('/', [Controlador::class,'metodoInicio']);
Route::post('/Inicio', [Controlador::class,'metodoLogin'])->name('Inicio');
























//Fin de rutas Alan

//Rutas Joni

Route::resource('usuario',UsuarioController::class);
Route::resource('proveedor',ProveedorController::class);


























//Fin de rutas Joni

//Rutas Jessy



























//Fin de rutas Jessy
