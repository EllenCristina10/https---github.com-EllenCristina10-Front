@extends('layout')
@section('title', 'Lista de Exercícios')
@section('conteudo')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Vídeo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Leg Press</td>
        <td>Músculos inferiores</td>
        <td>Vídeo</td>
        <td width=150px>
            <a href='#' class= 'btn btn-success btn-sm'>Editar</a>
            <a href='#' class='btn btn-danger btn-sm'>Excluir</a>
        </td>
      </tr>
    </tbody>
  </table>
    <div class="col-12 position-relative">
        <div class="position-absolute bottom-2 end-0">
            <a class="btn btn-primary btn-lg" href="{{route('exercicio.create')}}" role="button">Cadastrar</a>
        </div>
    </div>
@endsection