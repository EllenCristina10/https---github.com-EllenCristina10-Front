<?php

namespace App\Http\Controllers;

use App\Models\editarrelatorio;
use Illuminate\Http\Request;

class EditarrelatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('editarrelatorio');
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
    public function show(editarrelatorio $editarrelatorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(editarrelatorio $editarrelatorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, editarrelatorio $editarrelatorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(editarrelatorio $editarrelatorio)
    {
        //
    }
}
