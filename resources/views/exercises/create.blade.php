@extends('layout')
@section('title', 'Cadastro Exercício')
@section('conteudo')

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/a4a4be15d1.js" crossorigin="anonymous"></script>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/print.css') }}" rel="stylesheet">
        <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    </head>

    <div class="container" style="background-color: #f2f2f2; border-radius: 10px;">

        <form class="row" id="form" action="{{ route('exercise.store') }}" method="POST">
            @csrf
            {{-- Linha 1 --}}
            <div class="row d-flex justify-content-between mt-4">
                <div class="form-header">
                    <h2>Dados do Exercício</h2>
                </div>
                {{-- Nome --}}
                <div class="col-sm-6">
                    <label for="NomeExercicio">Nome do Exercício:</label>
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                            </svg>
                        </div>
                        <input type="text" class="form-control" id="NomeExercicio" name="nameExercise"
                            placeholder="Nome do Exercício" pattern="[a-z A-Z àâÂÀòôÒÔèêÈÊìîÌÎùûÙÛ \s]+$" required>
                        <div class="invalid-feedback">
                            Informe o nome do exercício!
                        </div>
                    </div>
                    {{--  <span id="error"></span>   --}}
                </div>
                {{-- Descrição --}}
                <div class="col-sm-6">
                    <label for="descricaoExercicio">Descrição do exercício:</label>
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-file-text secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                <path
                                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                            </svg>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control  h-100"
                                style="border: 1px solid #000;border-bottom-right-radius: 7px;
                        border-top-right-radius: 7px ;"
                                id="descricaoExercicio" name="descriptionExercise"></textarea>

                        </div>

                        <div class="invalid-feedback">
                            Informe a descrição!
                        </div>
                    </div>

                </div>
            </div>
            {{-- Linha 2 --}}
            <div class="row" style="justify-content: space-between; margin-top: 36px;">
                {{-- Vídeo --}}
                <div class="col-sm-6">
                    <label for="formFile" class="form-label">Escolha o video </label>
                    <div class="input-group">

                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-camera-reels secondary-color" viewBox="0 0 16 16">
                                <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0z" />
                                <path
                                    d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7zm6 8.73V7.27l-3.5 1.555v4.35l3.5 1.556zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z" />
                                <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                            </svg>
                        </div>
                        <div>

                            <input class="form-control" type="file" id="formFile" name="urlTutorialExercise"
                                title="Carregar o vídeo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="justify-content: end; margin-top: 36px;">
                <div class="col-md-1"><button button class="btn btn-success" type="submit"
                        onclick="validate()">Cadastrar</button></div>
            </div>
    </div>
    </form>
    </div>

@endsection
