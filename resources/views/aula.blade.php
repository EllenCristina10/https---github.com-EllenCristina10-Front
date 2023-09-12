@extends('layout')
@section('title', 'Cadastro Aula')
@section('conteudo')

<form class="fonte">
    {{--Linha 1--}}
    {{--Nome--}}
    <div class="row align-items-center p-2">
        <div class="col">
            <label class="visually-hidden" for="inlineFormInputGroupUsername">Nome</label>
            <div class="input-group">
                <div class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                    </svg>
                </div>
                <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Nome">
            </div>
        </div>

        {{--Descrição--}}
        <div class="col">
            <label class="visually-hidden" for="inlineFormInputGroupUsername">Descricao</label>
            <div class="input-group">
                <div class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                        <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                    </svg>
                </div>
                <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Descrição">
            </div>
        </div>
    </div>
    {{--Linha 2--}}
    <div class="row align-items-center p-2">
        {{--Instrutor--}}
        <div class="col">
            <label class="visually-hidden" for="inlineFormInputGroupUsername">Instrutor</label>
            <div class="input-group">
                <div class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                    </svg>
                </div>
                <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Instrutor">
            </div>
        </div>

        {{--Máximo de Aluno--}}
        <div class="col">
            <label class="visually-hidden" for="inlineFormInputGroupUsername">Maximo de Aluno</label>
            <div class="input-group">
                <div class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
                        <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    </svg>
                </div>
                <input type="Date" class="form-control" id="inlineFormInputGroupUsername" placeholder="Máximo de Aluno">
            </div>
        </div>
    </div>

</form>

    <div class="row align-items-center p-2">
        <div class="col-12 d-flex justify-content-center align-items-end">
                <div class="bottom-2 end-0">
                    <button type="button" class="btn btn-outline-danger">Cadastrar</button>
                </div>
        </div>
    </div>

@endsection