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
    <div class="col-md-1"><button class="btn btn-primary" type="submit">Novo</button></div>
  </div>
</div>

</div>

{{-- Pop-up de confirmação de exclusão --}}
<div class="modal fade" id="confirmacaoExclusaoModal" tabindex="-1" aria-labelledby="confirmacaoExclusaoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmacaoExclusaoModalLabel">Confirmar Exclusão</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Tem certeza que deseja excluir?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Não</button>
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Sim</button>
      </div>
    </div>
  </div>
</div>


@endsection