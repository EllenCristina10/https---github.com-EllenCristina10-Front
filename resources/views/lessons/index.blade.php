@extends('layout')
@section('title', 'Lista de Aulas')
@section('conteudo')

<div class="container">
    <h1>Lista de Aulas</h1>
    <table class=" table table-light table-striped-columns">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome da Aula</th>
                <th scope="col">Descrição</th>
                <th scope="col">Nome do Instrutor</th>
                <th scope="col">Máximo de Alunos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><a href="route ('student.show', '$student_id')"> Zumba</a></td>
                <td>Aula de Dança</td>
                <td>Cláudio</td>
                <td>40</td>
            </tr>
        </tbody>
    </table>

    <div class="col-12 position-relative">
        <div class="row" style="justify-content: end; margin-top: 36px;"> 

            <div class="col-md-1"><a href="{{route('lesson.create')}}"><button class="btn btn-success" type="submit">Novo</button></a></div>

        </div>
    </div>

</div>

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
<nav aria-label="...">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active" aria-current="page">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
        </li>
    </ul>
  </nav>
@endsection