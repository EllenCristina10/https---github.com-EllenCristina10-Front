<?php

namespace App\Http\Controllers;

use App\Models\ListarExercicio;
use Illuminate\Http\Request;

class ListarExercicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('listarexercicio');
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
    public function show(ListarExercicio $listarExercicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListarExercicio $listarExercicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ListarExercicio $listarExercicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListarExercicio $listarExercicio)
    {
        //
    }
}
