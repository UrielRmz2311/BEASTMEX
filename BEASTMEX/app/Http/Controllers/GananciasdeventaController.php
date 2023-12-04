<?php

namespace App\Http\Controllers;

use App\Models\gananciasdeventa;
use Illuminate\Http\Request;

class GananciasdeventaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allganancias= gananciasdeventa::all();
        return view('interfaces.consulta.GananciasVentas',compact('allganancias'));
    }
    public function guardarGanancia(Request $request)
    {
        $ganancia = $request->input('ganancia');
        $ventaGenerada = $request->input('ventaGenerada');
    
        // Guardar $ganancia en tu modelo y base de datos
        // Ejemplo:
        $gananciaModel = new gananciasdeventa();
        $gananciaModel->ganancia = $ganancia;
        $gananciaModel->venta_generada = $ventaGenerada;
        $gananciaModel->save();
    
        // Puedes enviar una respuesta al cliente si es necesario
        return response()->json(['message' => 'Ganancia guardada correctamente']);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(gananciasdeventa $gananciasdeventa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gananciasdeventa $gananciasdeventa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, gananciasdeventa $gananciasdeventa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gananciasdeventa $gananciasdeventa)
    {
        //
    }
}
