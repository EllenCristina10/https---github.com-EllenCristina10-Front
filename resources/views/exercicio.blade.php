@extends('layout')
@section('title', 'Cadastro Exercício')
@section('conteudo')

<div class="row container">

    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nome</label>
            <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Vídeo</label>
            <input type="file" class="form-control" id="inputEmail4">
        </div>
        
        <div class="col-12 position-relative">
            <div class="position-absolute bottom-2 end-0">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>  

</div>

@endsection