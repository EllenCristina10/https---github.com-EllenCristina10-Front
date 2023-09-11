<?php

namespace App\Http\Controllers;

use App\Models\ListarInstrutor;
use Illuminate\Http\Request;

class ListarInstrutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('listarinstrutor');
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
    public function show(ListarInstrutor $listarInstrutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListarInstrutor $listarInstrutor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ListarInstrutor $listarInstrutor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListarInstrutor $listarInstrutor)
    {
        //
    }
}
