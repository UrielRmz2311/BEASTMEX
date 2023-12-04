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
    public function index()
    {
        $allproveers= proveedor::all();
        return view('interfaces.consulta.ConsultaProveedores',compact('allproveers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function registro()
    {
        return view('interfaces.registros.FormProveedores');
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
        
        return redirect()->back();
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
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dlProveedor= proveedor::find($id);
        $dlProveedor->delete();

        return redirect()->back();
    }
    public function buscar(Request $request)
    {
        $searchTerm = $request->input('searchTerm');

        $resultados = proveedor::where('nombre', 'LIKE', "%$searchTerm%")->get();

        return response()->json($resultados);
    }
}
