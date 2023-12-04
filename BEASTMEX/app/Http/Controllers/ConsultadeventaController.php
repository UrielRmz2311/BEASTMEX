<?php

namespace App\Http\Controllers;

use App\Models\consultadeventa;
use Illuminate\Http\Request;

class ConsultadeventaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allventas= consultadeventa::all();
        return view('interfaces.consulta.ConsultaTicket',compact('allventas'));
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
    public function show(consultadeventa $consultadeventa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(consultadeventa $consultadeventa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, consultadeventa $consultadeventa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(consultadeventa $consultadeventa)
    {
        //
    }
}