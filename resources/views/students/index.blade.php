@extends('layout')
@section('title', 'Lista de Alunos')
@section('conteudo')

<div class="container">
  <h1>Lista de Alunos</h1>
  <table class=" table table-light table-striped-columns">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Contato</th>
        <th scope="col">Turno</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><a href="route ('student.show', '$student_id')"> João da Silva Sauro</a></td>
        <td>joao@hotmail.com</td>
        <td>(74) 99910 - 2325</td>
        <td>Matutino</td>
      </tr>
    </tbody>
  </table>

  <div class="col-12 position-relative">
  <div class="row" style="justify-content: end; margin-top: 36px;"> 

    <div class="col-md-1"><button class="btn btn-success" type="submit"><a href="{{route('student.create')}}">Novo</a></button></div>
  </div>
  
</div>

</div>

<div class="col-12 position-relative">
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
</div>
@endsection