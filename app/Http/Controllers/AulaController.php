<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Http;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lessons = Lesson::all();

        return view('lessons.index', ['lessons' => $lessons]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lessons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $lessonData = [
                'id_instructor' => '1',
                'lesson_description' => $request->input('descriptionLesson'),
                'lesson_max_students' => $request->input('maxStudentLesson'),
            ];

            // Salvando aula
            $responseLesson = Http::post('http://localhost:8000/api/v1/lessons', $lessonData);
            dd($responseLesson->json());

        } catch (\Exception $e) {
            // Lógica para lidar com exceções
            return response()->json(['error' => 'Erro ao processar a solicitação: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $lessons = Lesson::where('id', $id)->first();
        if(!empty($lessons)){
            return view('lessons.edit',['lessons' => $lessons]);
        }else{
            return redirect()->route('lesson.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}
