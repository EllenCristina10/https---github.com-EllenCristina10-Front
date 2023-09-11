@extends('layout')
@section('title', 'Cadastro Instrutor')
@section('conteudo')

<div class="row container">

    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputCompleteName" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="inputCompleteName">
        </div>
        <div class="col-md-6">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="text" class="form-control" id="inputEmail">
        </div>
        <div class="col-md-6">
            <label for="inputTelefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="inputTelefone">
        </div>
        <div class="col-md-3">
            <label for="inputAddress" class="form-label">Data de Nascimento</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="">
        </div>
        <div class="col-md-3">
            <label for="inputCPF" class="form-label">CPF</label>
            <input type="text" class="form-control" id="inputCPF">
        </div>
        <div class="col-md-2">
            <label for="inputState" class="form-label">Estado</label>
            <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputCity" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-2">
            <label for="inputCEP" class="form-label">CEP</label>
            <input type="text" class="form-control" id="inputCEP">
        </div>
        
        <div class="col-12 position-relative">
            <div class="position-absolute bottom-2 end-0">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>  

</div>

@endsection