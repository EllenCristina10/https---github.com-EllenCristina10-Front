@extends('layout')
@section('title', 'Cadastro Aluno')
@section('conteudo')

<div class="row container">

    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nome Completo</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Telefone</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Senha</label>
            <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-2">
            <label for="inputAddress" class="form-label">Data de Nascimento</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="">
        </div>
        <div class="col-md-2">
            <label for="inputAddress2" class="form-label">Altura</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="">
        </div>
        <div class="col-md-2">
            <label for="inputEmail4" class="form-label">Peso</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Endereço</label>
            <input type="email" class="form-control" id="inputEmail4">
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
            <label for="inputEmail4" class="form-label">CEP</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Objetivo</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>  

</div>

@endsection