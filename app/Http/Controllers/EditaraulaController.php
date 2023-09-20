<?php

namespace App\Http\Controllers;

use App\Models\editaraula;
use Illuminate\Http\Request;

class EditaraulaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('editaraula');
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
    public function show(editaraula $editaraula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(editaraula $editaraula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, editaraula $editaraula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(editaraula $editaraula)
    {
        //
    }
}
