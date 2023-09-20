<?php

namespace App\Http\Controllers;

use App\Models\editaraluno;
use Illuminate\Http\Request;

class EditaralunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('editaraluno');
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
    public function show(editaraluno $editaraluno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(editaraluno $editaraluno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, editaraluno $editaraluno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(editaraluno $editaraluno)
    {
        //
    }
}
