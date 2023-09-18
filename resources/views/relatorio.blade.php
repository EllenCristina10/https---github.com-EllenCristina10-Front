@extends('layout')
@section('title', 'Relatório')
@section('conteudo')

<div class="container" style="margin-top: 36px;">
<form class="row">
    <div class="row" style="justify-content: space-between; margin-top: 36px;">
            {{-- Linha 1 --}}
            <h1>Relatório</h1>
            <div class="row" style="justify-content: space-between; margin-top: 36px;">
            {{--Instrutor--}}
                <div class="col-sm-6" style="min-width: 200px">
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person secondary-color" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                            </svg>
                        </div>
                        <select id="inputSexo" class="form-select" required> 
                            <option selected disabled value=""> Instrutor...</option>
                            <option>Ricardo</option>
                            <option>Alan Jefferson</option>
                            <option>Fernanda</option>
                            <option>Juliana Bonde</option>
                        </select>
                        <div class="invalid-feedback">
                            Informe o Instrutor!
                        </div>
                    </div>
                </div>
                   {{--Aluno--}}
                   <div class="col-sm-6" style="min-width: 200px">
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person secondary-color" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                            </svg>
                        </div>
                        <select id="inputSexo" class="form-select" required> 
                            <option selected disabled value=""> Aluno...</option>
                            <option>Kaio Fernandes</option>
                            <option>Ellen Cristina</option>
                            <option>Filho de Cleber</option>
                            <option>Pedro Henrique</option>
                            <option>Lucas Bastos</option>
                        </select>
                        <div class="invalid-feedback">
                            Informe o Aluno!
                        </div>
                    </div>
                </div>
            </div>  
         
            {{--Linha 2--}}
            <div class="row" style="justify-content: space-between; margin-top: 36px;">
                {{--Descrição--}}
                <div class="col-sm-6">
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text secondary-color" viewBox="0 0 16 16">
                                <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                            </svg>
                        </div>
                        <input type="text" class="form-control" id="inputDescricao" placeholder="Descrição" required>
                        <div class="invalid-feedback">
                            Informe a descrição!
                        </div>
                    </div>
                </div>
            </div>
            
        </div> 
        </form>

    </div>


@endsection