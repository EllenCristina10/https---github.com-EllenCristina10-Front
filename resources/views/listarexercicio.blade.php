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
            <button type="button" class="btn btn-primary" id="botao-excluir" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Excluir
            </button>
        </td>
      </tr>
    </tbody>
  </table>
    <div class="col-12 position-relative">
        <div class="position-absolute bottom-2 end-0">
            <a class="btn btn-primary btn-lg" href="{{route('exercicio.create')}}" role="button">Cadastrar</a>
        </div>
    </div>

    {{--Pop-up de confirmação--}}
    <div class="modal fade"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Você quer excluir esse exercício ?</h5>
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