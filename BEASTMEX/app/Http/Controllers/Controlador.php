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

        $validatedData = $req->validate($req->rulesFormulario1());
        $prov = $req->input('txtProveedor');

        return redirect('/prov')->with('confirmacion','Proveedor '. $prov . ' registrado correctamente');
    }

    public function ModificarUsu(Validador $req){

        $validatedData = $req->validate($req->rulesFormulario2());

        return redirect('/conusu')->with('confirmacion2','Usuario modificado correctamente');
    }
    public function EliminarUsu(Validador $req){

        return redirect('/conusu')->with('confirmacion3','Usuario eliminado correctamente');
    }
    public function AgregarUsu(Validador $req){

        $validatedData = $req->validate($req->rulesFormulario3());

        return redirect('/conusu')->with('confirmacion4','Usuario agregado correctamente');
    }
    public function ModificarProv(Validador $req){

        $validatedData = $req->validate($req->rulesFormulario4());

        return redirect('/conusu')->with('confirmacion5','Usuario modificado correctamente');
    }
    public function EliminarProv(Validador $req){

        return redirect('/conusu')->with('confirmacion6','Usuario eliminado correctamente');
    }
    public function AgregarProv(Validador $req){

        $validatedData = $req->validate($req->rulesFormulario5());

        return redirect('/conusu')->with('confirmacion7','Usuario agregado correctamente');
    }
}
