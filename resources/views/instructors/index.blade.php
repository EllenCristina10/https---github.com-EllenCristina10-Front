@extends('layout')
@section('title', 'Lista de Instrutores')
@section('conteudo')

<div class="container">
  <h1>Lista de Instrutores</h1>
  <table class=" table table-light table-striped-columns">
    <thead>
      <tr>
          <th scope="col">Id</th>
          <th scope="col">Nome</th>
          <th scope="col">Telefone</th>
          <th scope="col">Email</th>
          <th scope="col">Senha</th>
          <th scope="col">Data de Nascimento</th>
          <th scope="col">CPF</th>
          <th scope="col">Endereço</th>
          <th scope="col">Estado</th>
          <th scope="col">Cidade</th>
          <th scope="col">CEP</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><a href="route ('student.show', '$student_id')"> Ricardo Milos da Silva</a></td>
        <td>7499900-0822</td>
        <td>RicardoInstrutor@gmail.com</td>
        <td>5321</td>
        <td>12/07/2001</td>
        <td>65909823499</td>
        <td>Rua C</td>
        <td>BA</td>
        <td>Irecê</td>
        <td>44960000</td>
      </tr>
    </tbody>
  </table>

  <div class="col-12 position-relative">
  <div class="row" style="justify-content: end; margin-top: 36px;"> 

    <div class="col-md-1"><a href="{{route('instructor.create')}}"><button class="btn btn-success" type="submit">Novo</button></a></div>
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