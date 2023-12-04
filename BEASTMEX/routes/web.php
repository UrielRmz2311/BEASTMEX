<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;

Route::get('/', [Controlador::class, 'metodoInicio']);
Route::post('/metodologin', [Controlador::class, 'metodologin']);