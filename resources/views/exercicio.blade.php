@extends('layout')
@section('title', 'Cadastro Exercício')
@section('conteudo')

<div class="container" style="margin-top: 36px;">

    <form class="row needs-validation was-validated" novalidate="" onsubmit="return validate()">    
        {{--Linha 1--}}
        <h1>Dados do Exercício</h1>
        <div class="row" style="justify-content: space-between; margin-top: 36px;">
            {{--Nome--}}
            <div class="col-sm-6">
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person secondary-color" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                        </svg>
                    </div>
                        <input type="text" class="form-control" id="validationDefault01" placeholder="Nome Completo" value="" required="">
                        <div class="invalid-feedback">
                            Informe o nome do exercício!
                        </div>
                </div>
                
            </div>
            {{--Descrição--}}
            <div class="col-sm-6">
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text secondary-color" viewBox="0 0 16 16">
                        <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                        </svg>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Descrição" value="" required="">
                    <div class="invalid-feedback">
                        Informe a descrição!
                    </div>
                </div>
                
            </div>
        </div>
        {{--Linha 2--}}
        <div class="row" style="justify-content: space-between; margin-top: 36px;">
            {{--Vídeo--}}
            <div class="col-sm-6">
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-reels secondary-color" viewBox="0 0 16 16">
                            <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0z"/>
                            <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7zm6 8.73V7.27l-3.5 1.555v4.35l3.5 1.556zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z"/>
                            <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                        </svg>
                    </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Vídeo" value="" required="">
                        <div class="invalid-feedback">
                            Envie o video!
                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="row" style="justify-content: end; margin-top: 36px;">
            <div class="col-md-1">
                <button id="cadastrarButton" button type="button" class="btn btn-success">Cadastrar</button>
            </div>
        </div>
    </form>
</div>
 


@endsection