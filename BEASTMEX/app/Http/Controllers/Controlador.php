<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Validador;

class Controlador extends Controller
{
    public function FormularioProveedores(){
        return view ('FormProveedores');
    }
    public function ConUsuarios(){
        return view ('ConsultaUsuarios');
    }
    public function ConProveedores(){
        return view ('ConsultaProveedores');
    }
    public function Conticket(){
        return view ('ConsultaTicket');
    }
    public function Ticketsventa(){
        return view ('TicketsVenta');
    }
    public function ConTickets(){
        return view ('ConsultaTickets');
    }
    public function RegistroProv(Validador $req){

        $prov = $req->input('txtProveedor');

        return redirect('/prov')->with('confirmacion','Proveedor '. $prov . ' registrado correctamente');
    }
}
