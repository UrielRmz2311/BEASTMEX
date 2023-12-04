<?php

namespace App\Http\Controllers;

use App\Models\ordendecompra;
use Illuminate\Http\Request;

class OrdendecompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allorders= ordendecompra::all()->groupBy('proveedor');
        return view('interfaces.consulta.Ordendecompra',compact('allorders'));
    }
    public function registro()
    {
        return view('interfaces.registros.Ordenarcompra');
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

        $productos = $request->input('txtProducto');
        $cantidades = $request->input('txtCantidad');

        $productosString = implode(',', $productos);
        $cantidadesString = implode(',', $cantidades);
        
        $ordenCompra = new ordendecompra();
        $ordenCompra->proveedor = $request->txtProveedor;
        $ordenCompra->direccion_proveedor = $request->txtDireccion;
        $ordenCompra->producto = $productosString;
        $ordenCompra->cantidad = $cantidadesString; // Accedemos al mismo índice en las cantidades
        $ordenCompra->save();
        

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $productos = $request->input('txtProducto');
        $cantidades = $request->input('txtCantidad');

        $productosString = implode(',', $productos);
        $cantidadesString = implode(',', $cantidades);
        
        $UpCompra= ordendecompra::find($id);
        $UpCompra->proveedor = $request->txtProveedor;
        $UpCompra->direccion_proveedor = $request->txtDireccion;
        $UpCompra->producto = $productosString;
        $UpCompra->cantidad = $cantidadesString; // Accedemos al mismo índice en las cantidades
        $UpCompra->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dlOrden= ordendecompra::find($id);
        $dlOrden->delete();

        return redirect()->back();
    }
}
