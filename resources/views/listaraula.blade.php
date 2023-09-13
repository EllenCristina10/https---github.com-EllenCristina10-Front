@extends('layout')
@section('title', 'Lista de Aulas')
@section('conteudo')

<table class="table">
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
        <td>Zumba</td>
        <td>Aula de Dança</td>
        <td>Cláudio</td>
        <td>40</td>
        <td width=150px>
            <a href='#' class= 'btn btn-success btn-sm'>Editar</a>
            <button type="button" class="btn btn-primary" id="botao-excluir" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Excluir
            </button>
        </td>
      </tr>
    </tbody>
  </table>
    <div class="col-12 position-relative">
        <div class="position-absolute bottom-2 end-0">
          <a class="btn btn-primary btn-lg" href="{{route('aula.create')}}" role="button">Cadastrar</a>
        </div>
    </div>

    {{--Pop-up de confirmação--}}
    <div class="modal fade"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Você quer excluir essa aula?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Confirmar</button>
            <button type="button" class="btn btn-primary">Voltar</button>
          </div>
        </div>
      </div>
    </div>
@endsection