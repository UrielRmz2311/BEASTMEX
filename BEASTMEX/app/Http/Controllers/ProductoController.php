<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

//class PDFController extends Controller
//{
//}
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ConsultaProduC()
    {
        $allProduct=producto::all();
        return view('interfaces.consulta.Consulta-Productos-AA',compact('allProduct'));
    }

    public function Registro()
    {
        return view('interfaces.registros.Registro-Producto-A');
    }
    public function index()
    {
        $allProduct=producto::all();
        return view('interfaces.consulta.Consulta-Productos-AA',compact('allProduct'));
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
        $allProduct=new producto();
        $allProduct->noserie=$request->txtserie;
        $allProduct->marca=$request->txtmarc;
        $allProduct->cantidad=$request->txtcantida;
        $allProduct->costodecompra=$request->txtcost;
        $allProduct->preciodeventa=$request->txtprecio;
        $allProduct->fechaingreso=$request->txtfech;
        $allProduct->fotoproducto=$request->txtfoto;
        $allProduct->save();
        return redirect()->back()->with("Confirmacion77", "El producto se ha agregado correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $upProduct=producto::find($id);
        $upProduct->noserie=$request->txtnserie;
        $upProduct->marca=$request->txtmarca;
        $upProduct->cantidad=$request->txtcantidad;
        $upProduct->costodecompra=$request->txtcosto;
        $upProduct->preciodeventa=$request->txtprecioV;
        $upProduct->fechaingreso=$request->txtfecha;
        $upProduct->fotoproducto=$request->txtfoto;
        $upProduct->update();
        return redirect()->back();
    }
    public function destroy($id)
    {
        $dProduct=producto::find($id);
        $dProduct->delete();
        return redirect()->back();
    }
    public function generarPdfProducto($id)
    {
        $allProduct = producto::find($id); // Obtén el producto según el ID proporcionado
    
        if (!$allProduct) {
            abort(404, 'Producto no encontrado');
        }
    
        $pdf = PDF::loadView('producto_individual', compact($allProduct));
    
        return $pdf->download('producto_' . $allProduct->noserie . '.pdf');
    }
}
