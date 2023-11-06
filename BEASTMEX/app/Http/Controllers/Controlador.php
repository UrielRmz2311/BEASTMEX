<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Validador;
use Illuminate\Support\Facades\Redirect;

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
    public function GananciaVenta(){
        return view ('GananciasVentas');
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

        return redirect('/conusu')->with('confirmacion5','Proveedor modificado correctamente');
    }
    public function EliminarProv(Validador $req){

        return redirect('/conusu')->with('confirmacion6','Usuario eliminado correctamente');
    }
    public function AgregarProv(Validador $req){

        $validatedData = $req->validate($req->rulesFormulario5());

        return redirect('/conusu')->with('confirmacion7','Usuario agregado correctamente');
    }
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

    public function metodocompras(){
        return view('iniciocompras');
    }

    public function metodoventass(){
        return view('inicioventas');
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
