<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Http;
use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exercises = Exercise::all();

        return view('exercises.index', ['exercises' => $exercises]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('exercises.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $exerciseData = [
                'exercise_name' => $request->input('nameExercise'),
                'exercise_description' => $request->input('descriptionExercise'),
                'exercise_url_tutorial' => $request->input('urlTutorialExercise'),
            ];

            // Salvando exercicio
            $responseExercise = Http::post('http://localhost:8000/api/v1/exercises', $exerciseData);
            dd($responseExercise->json());

        } catch (\Exception $e) {
            // Lógica para lidar com exceções
            return response()->json(['error' => 'Erro ao processar a solicitação: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Exercicio $exercicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exercicio $exercicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exercicio $exercicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exercicio $exercicio)
    {
        //
    }
}
