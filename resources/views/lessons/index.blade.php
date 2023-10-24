@extends('layout')
@section('title', 'Lista de Aulas')
@section('conteudo')

<head>
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
</head>

<div class="container" style="background-color: #f2f2f2; border-radius: 10px;">
    <div class="form-header">
        <h2>Lista de Aulas</h2>
    </div>
    <table class=" table table-light table-striped-columns">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome da Aula</th>
                <th scope="col">Nome do Instrutor</th>               
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><a href="route ('student.show', '$student_id')"> Zumba</a></td>               
                <td>Cláudio Marques de Araujo Costa</td>
            </tr>
        </tbody>
    </table>

    <div class="col-12 position-relative">
        <div class="row" style="justify-content: end; margin-top: 36px;"> 
            
            <div class="col-md-1"><a href="{{route('lesson.create')}}"><button dusk='novo-button' class="btn btn-success" type="submit">Novo</button></a></div>
            <div class="custom-spacing"></div>
        </div>
    </div>

</div>
<div class="custom-spacing">
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
</div>

@endsection