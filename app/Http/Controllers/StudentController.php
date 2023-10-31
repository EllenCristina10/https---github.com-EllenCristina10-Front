<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Anamnese;
use Http;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
    
        return view('students.index', ['students' => $students]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $studentData = [
                'student_name' => $request->input('nomeStudent'),
                'student_cpf' => $request->input('cpfStudent'),
                'student_email' => $request->input('emailStudent'),
                'student_telephone' => $request->input('telStudent'),
                'student_date_birth' => $request->input('nascStudent'),
                'student_weight' => $request->input('pesoStudent'),
                'student_height' => $request->input('alturaStudent'),
                // 'student_level' => $request->input('experiencia'),
                'student_level' => "teste",
                //'student_goal' => $request->input('meta'),
                'student_goal' => "teste",
                //'id_instructor' => $request->input('instrutorStudent'),
                'id_instructor' => '1',
                // é para ser assim, mas como não há campo frequência no front, não há como salvar no banco, então mandaremos um dado diretamente
                // 'student_frequency' => $request->input('frequencia'),
                'photo' => $request->input('photo'),
                //'student_photo_url' => "teste",
                'student_frequency' => "teste",
                'student_address' => $request->input('enderecoStudent'),
                'student_address_number' => $request->input('numeroStudent'),
                'student_city' => $request->input('cidadeStudent'),
                'student_zip_code' => $request->input('cepStudent'),
                'student_state' => $request->input('estadoStudent'),
            ];

            // Salvando estudante
            $responseStudent = Http::post('http://localhost:8000/api/v1/students', $studentData);
            dd($responseStudent->json());

        } catch (\Exception $e) {
            // Lógica para lidar com exceções
            return response()->json(['error' => 'Erro ao processar a solicitação: ' . $e->getMessage()], 500);
        }

    }
    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $students = Student::where('id', $id)->first();
        if(!empty($students)){
            return view('students.edit',['students' => $students]);
        }else{
            return redirect()->route('student.index');
        }
        
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = [
        'student_name' => $request->student_name,
        'student_cpf'  => $request->cpf,
        'student_email' => $request->student_email,
        'student_telephone' => $request->student_telephone,
        'student_date_birth' => $request->student_date_birth,
        'student_weight' => $request->student_weight,
        'student_height' => $request->student_height,
        //'photo' => $request->student_photo,
        'student_address' => $request->student_address,
        'student_address_number' => $request->student_address_number,
        'student_city' => $request->student_city,
        'student_zip_code' => $request->student_zip_code,
        'student_state' => $request->student_state,
        ];
        Student::where('id', $id)->update($data);
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
