@extends('layout')
@section('title', 'Lista de Aulas')
@section('conteudo')

<h1>Lista de  Relatórios</h1>
<div class="row" style="justify-content: space-between; margin-top: 36px;"></div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Instrutor</th>
            <th scope="col">Aluno</th>
            <th scope="col">Descrição </th>
            <th scope="col">editar</th>
            <th scope="col">excluir</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Zé da Manga</td>
            <td>Kaio</td>
            <td>
                O aluno Kaio embora tenha demostrado... 
                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="modal" data-bs-target="#descricaoModal">Mostrar Descrição Completa</button>
            </td>
            <td>    
                <a href="{{route ('editarrelatorio.index')}}" class='btn btn-success btn-sm'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg></a></td>
            <td>
                <button type="button" class="btn btn-danger btn-sm" id="botao-excluir" data-bs-toggle="modal" data-bs-target="#confirmacaoExclusaoModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                      </svg>
                </button>
            </td>
        </tr>
    </tbody>
</table>

<div class="col-12 position-relative">
    <div class="row" style="justify-content: end; margin-top: 36px;">
        <div class="col-md-1"><button class="btn btn-success" type="submit">Cadastrar</button></div>
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

{{-- Modal para mostrar a descrição completa --}}
<div class="modal fade" id="descricaoModal" tabindex="-1" aria-labelledby="descricaoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descricaoModalLabel">Descrição Completa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Coloque a descrição completa aqui -->
                O aluno Kaio, embora tenha demonstrado uma boa execução dos movimentos, não obteve muitos resultados em perda de peso ou ganho de massa, continuando com o mesmo "shape".
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
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