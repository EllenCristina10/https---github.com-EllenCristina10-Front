@extends('layout')
@section('title', 'Lista de Alunos')
@section('conteudo')

    <head>
        <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    </head>

    <div class="container" style="background-color: #f2f2f2; border-radius: 10px;">
        <div class="form-header">
            <h2>Lista de Alunos</h2>
        </div>
        <table class="table table-light table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contato</th>
                    <th scope="col" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td> {{ $student->id }} </td>
                        <td> {{ $student->student_name }} </td>
                        <td> {{ $student->student_email }} </td>
                        <td> {{ $student->student_telephone }} </td>
                        <td class="text-center">
                    
                            <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('student.destroy', $student->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf

                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="col-12 position-relative">
            <div class="row" style="justify-content: end; margin-top: 36px;">

                <div class="col-md-1"><a href="{{ route('student.create') }}"><button class="btn btn-success"
                            type="submit">Novo</button></a></div>
                <div class="custom-spacing"></div>
            </div>
        </div>
    </div>

    <div class="custom-spacing"></div>
    <div class="col-12 position-relative">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>

@endsection
