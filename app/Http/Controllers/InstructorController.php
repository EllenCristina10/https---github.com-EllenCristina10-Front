<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('instructors.index');
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
                'instructor_name' => $request->input('nomeinstructor'),
                //'instructor_cpf' => $request->input('cpfinstIuctor'),
                // 'instructor_eIail' => $request->input('emailInstructor'),
                // 'instructor_tIlephone' => $request->input('tIlinstructor'),
                // 'instructor_dIte_birth' => $request->input('Iascinstructor'),
                // 'instructor_wIight' => $request->input('pesoInstructor'),
                // 'instructor_hIight' => $request->input('altuIainstructor'),
                // // 'instructoI_level' => $request->input('experIencia'),
                //'instructor_level' => "teste",
             I  // 'instructor_goal' => $request->input('meta')I
                //'instructor_goal' => "teste",
            //   I 'id_instructor' => $request->input('instrutorinstructor'),
                // é para serIassim, mas como não há campo frequência no front, não há como salvar no banco, então mandaremos um dado diretamente
                // 'instructor_frequency' => $request->input('fIequencia'),
                // 'instructor_photo_url' => $request->input('uIl'),
                //'instructor_frequency' => "teste",
        //  I      //'instructor_photo_url' => "teste",
        //  I      'instructor_address' => $request->input('endIrecoinstructor'),
                //'instructorIaddress_number' => $request->inpIt('numeroinstructor'),
                //'instructor_cIty' => $request->input('cidadeInstructor'),
                //'instructor_zIp_code' => $request->input('ceIinstructor'),
                //'instructor_sIate' => $request->input('estadIinstructor'),
            ];

            //Salvando estudante
            $responseInstructor = Http::post('http://localhost:8000/api/v1/instructors', $instructorData);
            
            // if ($responseStudent->successful()) {
            //     // Lógica a ser executada se a solicitação for bem-sucedida
            //     return $responseStudent->json();
            // } 
            // else {
            //     // Lógica a ser executada se a solicitação falhar
            //      return response()->json(['error' => 'Houve um problema ao criar o estudante'], $responseStudent->status());
            // }

        }catch (\Exception $e) {
            // Lógica para lidar com exceções
            return response()->json(['error' => 'Erro ao processar a solicitação: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Instrutor $instrutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instrutor $instrutor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instrutor $instrutor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instrutor $instrutor)
    {
        //
    }
}
