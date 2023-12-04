<?php

namespace App\Http\Controllers;

use App\Models\proveedor;
use Illuminate\Http\Request;
use App\Http\Requests\Validador;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function registroproveedor()
    {
        return view('interfaces.registros.FormProveedores');
    } 

    public function index()
    {
        $allproveers= proveedor::all();
        return view('interfaces.consulta.ConsultaProveedores',compact('allproveers'));
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
        $validatedData = $request->validate($request->rulesFormulario5());
        $addProveedor= new proveedor();
        $addProveedor->nombre=$request->txtProvee;
        $addProveedor->direccion=$request->txtDirec;
        $addProveedor->save();
        
        return redirect()->back()->with('confirmacion','Proveedor registrado correctamente');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Validador $request, $id)
    {
        $validatedData = $request->validate($request->rulesFormulario4());
        $UpProveedor= proveedor::find($id);
        $UpProveedor->nombre=$request->txtProv;
        $UpProveedor->direccion=$request->txtDir;
        $UpProveedor->update();
        
        return redirect()->back()->with('confirmacion5','Proveedor modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dlProveedor= proveedor::find($id);
        $dlProveedor->delete();

        return redirect()->back()->with('confirmacion66','Proveedor eliminado correctamente');
    }
}