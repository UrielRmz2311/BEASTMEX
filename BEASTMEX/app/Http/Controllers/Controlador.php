<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Validador;
use Illuminate\Support\Facades\Redirect;

class Controlador extends Controller
{
    //
    public function metodoInicio(){
        return view('Login');
    }

    public function metodoalmacen(){
        return view('almacen');
    }

    
    public function metodogerente(){
        return view('iniciogerente');
    }

    public function metodoLogin(Validador $req){
        $correo = $req->input('txtusuario');
        
        if (strpos($correo, '.gerente') !== false) {
            return view('iniciogerente');
        } elseif (strpos($correo, '.almacen') !== false) {
            return view('inicioalmacen');
        } elseif (strpos($correo, '.compras') !== false) {
            return view('iniciocompras');
        } elseif (strpos($correo, '.ventas') !== false) {
            return view('inicioventas');
        } else {
            // Si no tiene ninguna extensión específica
            return redirect('/')->with('mensaje', 'El usuario no es válido. Favor de inténtalo de nuevo !!!');
        }
    }

    
}
