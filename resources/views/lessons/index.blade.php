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

    <div class="col-md-1"><button class="btn btn-success" type="submit"><a href="{{route('lesson.create')}}">Novo</a></button></div>
  </div>
  
</div>

</div>

@endsection