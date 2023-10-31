<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Validador;

class Controlador extends Controller
{
    public function FormularioProveedores(){
        return view ('Login');
    }
}
