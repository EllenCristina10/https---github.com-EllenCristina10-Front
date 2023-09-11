@extends('layout')
@section('title', 'Cadastro Aluno')
@section('conteudo')


<div class="row container">
    <form class="row g-3">
        <div class="col-md-6">
            <img src="..resources/imagens/encontro.png" alt="pessoa">
            <label for="inputEmail4" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="inputEmail4">
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
            <input type="date" class="form-control" id="inputAddress" placeholder="">
        </div>
        <div class="col-md-2">
            <label for="inputAddress2" class="form-label">
            <img src="../imagens/altura.png" alt="Icon" class="icon">    
            Altura</label>
            <input type="number" class="form-control" id="inputAddress2" placeholder="">
        </div>
        <div class="col-md-2">
            <label for="inputEmail4" class="form-label">Peso</label>
            <input type="number" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="inputEmail4">
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
            <input type="email" class="form-control" id="inputCEP">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">
            <img src="resources/imagens/objetivo.png" alt="Icon" class="icon">    
            Objetivo</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        
        <div class="col-12 position-relative">
            <div class="position-absolute bottom-2 end-0">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>  

</div>

@endsection