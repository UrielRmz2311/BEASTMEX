<?php

namespace App\Http\Controllers;

use App\Models\ticketdeventa;
use Illuminate\Http\Request;

class TicketdeventaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alltickets= ticketdeventa::all();
        return view('interfaces.consulta.TicketsVenta',compact('alltickets'));
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
    public function show(ticketdeventa $ticketdeventa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ticketdeventa $ticketdeventa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ticketdeventa $ticketdeventa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ticketdeventa $ticketdeventa)
    {
        //
    }
}