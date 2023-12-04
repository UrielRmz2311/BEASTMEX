<?php

namespace App\Http\Controllers;

use App\Http\Requests\Validador;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function registrousu()
    {
        return view('interfaces.registros.RegistroUsuarios');
    } 

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
    public function store(Validador $request)
    {
        $validatedData = $request->validate($request->rulesFormulario3());
        $addUsuario= new usuario();
        $addUsuario->nombre=$request->txtNom;
        $addUsuario->contraseña = Hash::make($request->txtCon); // Hash de la contraseña
        $addUsuario->contraseñanoencrip = $request->txtCon;
        $addUsuario->correo=$request->txtCor;
        $addUsuario->puesto=$request->txtPue;
        $addUsuario->save();
        
        return redirect()->back()->with("Confirmacion", "El usuario se ha agregado correctamente");
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Validador $request, $id)

    {
        $validatedData = $request->validate($request->rulesFormulario3());
        $UpUsuario= usuario::find($id);
        $UpUsuario->nombre=$request->txtNombre;
        $UpUsuario->contraseña=$request->txtContra;
        $UpUsuario->correo=$request->txtCorreo;
        $UpUsuario->puesto=$request->txtPuesto;
        $UpUsuario->update();
        
        return redirect()->back();


    {
        $validatedData = $request->validate($request->rulesFormulario2());
        $UpUsuario = usuario::find($id);
    
        // Verifica si se proporciona una nueva contraseña
        if ($request->has('txtContra')) {
            $UpUsuario->contraseña = Hash::make($request->txtContra);
        }
        $UpUsuario->contraseñanoencrip = $request->txtContra;
        $UpUsuario->nombre = $request->txtNombre;
        $UpUsuario->correo = $request->txtCorreo;
        $UpUsuario->puesto = $request->txtPuesto;
        $UpUsuario->update();
    
        return redirect()->back()->with('confirmacion2', 'Usuario modificado correctamente');

    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dlUsuario= usuario::find($id);
        $dlUsuario->delete();

        return redirect()->back();
    }
    public function buscar(Request $request)
    {
        $searchTerm = $request->input('searchTerm');

        $resultados = usuario::where('nombre', 'LIKE', "%$searchTerm%")->get();

        return response()->json($resultados);
        return redirect()->back()->with('confirmacion3','Usuario eliminado correctamente');;

    }
}
