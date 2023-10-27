@extends('layout')
@section('title', 'Cadastro Aula')
@section('conteudo')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a4a4be15d1.js" crossorigin="anonymous"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/print.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
</head>

<div class="container" style="background-color: #f2f2f2; border-radius: 10px;">

    <form class="row" id="form">
         {{--Linha 1--}}
         <div class="row d-flex justify-content-between mt-4">
            <div class="form-header">
                <h2>Dados de Aula</h2>
            </div>
            {{--Nome--}}
            <div class="col-sm-6">
                
                <label for="inputNome">Nome da Aula:</label>
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person secondary-color" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                        </svg>
                    </div>
                    <input type="text" class="form-control" id="inputNome" placeholder="Nome" required>
                    <div class="invalid-feedback">
                        Informe o nome da aula!
                    </div>
                </div>
              {{--<span id="error"></span>--}}
            </div>
            {{--Instrutor--}}
            <div class="col-sm-3" style="min-width: 200px">
                <label for="inputInstrutor">Nome do Instrutor Responsável:</label>
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person secondary-color" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                        </svg>
                    </div>
                    <select id="inputInstrutor" class="form-select" required> 
                        <option selected disabled value=""> Instrutor...</option>
                        <option>Ricardo</option>
                        <option>Alan Jefferson</option>
                        <option>Fernanda</option>
                    </select>
                    <div class="invalid-feedback">
                        Informe o Instrutor!
                    </div>
                </div>
            </div>
            {{--Máximo de Aluno--}}
            <div class="col-sm-3">
                <label for="inputMaxAlunos">Máximo de alunos:</label>
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-exclamation secondary-color" viewBox="0 0 16 16">
                            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1.5a.5.5 0 0 0 1 0V11a.5.5 0 0 0-.5-.5Zm0 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Z"/>
                        </svg>
                    </div>
                    <input type="text" class="form-control" id="inputMaxAlunos" placeholder="Máximo de Alunos" required>
                    <div class="invalid-feedback">
                        Informe o número máximo de alunos!
                    </div>
                </div>
            </div>
        </div>
        {{--Linha 2--}}
        <div class="row" style="justify-content: space-between; margin-top: 36px;">
            {{--Descrição--}}
            <div class="col-sm-16 ">
                <label for="aulaDescricao">Descrição da Aula</label>
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text secondary-color" viewBox="0 0 16 16">
                            <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                        </svg>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control h-100" style="border: 1px solid #000;border-bottom-right-radius: 7px;
                        border-top-right-radius: 7px ;" id="aulaDescricao"></textarea>
        
                    </div>
                    <div class="invalid-feedback">
                        Informe a descrição!
                    </div>
                </div>
            </div>
           
        </div>
            <div class="row" style="justify-content: end; margin-top: 36px;">
                <div class="col-md-1"><button button type="button" class="btn btn-success">Cadastrar</button></div>
            </div>
        </div>
    </form>

</div>

@endsection