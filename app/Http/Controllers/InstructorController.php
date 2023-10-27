<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Http;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructors = Instructor::all();
    
        return view('instructors.index', ['instructors' => $instructors]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('instructors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $instructorData = [
                'instructor_name' => $request->input('nomeInstructor'),
                'instructor_cpf' => $request->input('cpfInstIuctor'),
                'instructor_telephone' => $request->input('telefoneInstructor'),
                'instructor_email' => $request->input('emailInstructor'),
                'instructor_date_birth' => $request->input('nascInstructor'),
                'instructor_time_arrival' => $request->input('entradaInstructor'),
                'instructor_time_exit' => $request->input('saidaInstructor'),
                'instructor_address' => $request->input('enderecoInstructor'),
                'instructor_address_number' => $request->input('numeroInstructor'),
                'instructor_city' => $request->input('cidadeInstructor'),
                'instructor_zip_code' => $request->input('cepInstructor'),
                'instructor_state' => $request->input('estadoInstructor'),
            ];

            //Salvando instrutor
            $responseInstructor = Http::post('http://localhost:8000/api/v1/instructors', $instructorData);
            dd($responseInstructor->json());
            
        } catch (\Exception $e) {
            // Lógica para lidar com exceções
            return response()->json(['error' => 'Erro ao processar a solicitação: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instructor $instructor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instructor $instructor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instructor $instructor)
    {
        //
    }
}
