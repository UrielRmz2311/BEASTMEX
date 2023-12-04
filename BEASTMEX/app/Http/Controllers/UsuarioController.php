<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allusers= usuario::all();
        return view('interfaces.consulta.ConsultaUsuarios',compact('allusers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addUsuario= new usuario();
        $addUsuario->nombre=$request->txtNom;
        $addUsuario->contraseña=$request->txtCon;
        $addUsuario->correo=$request->txtCor;
        $addUsuario->puesto=$request->txtPue;
        $addUsuario->save();
        
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuario $usuario)
    {
        //
    }
}
