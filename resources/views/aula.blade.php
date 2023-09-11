@extends('layout')
@section('title', 'Cadastro Aula')
@section('conteudo')

<div class="row container">

    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputNameClass" class="form-label">Nome da Aula</label>
            <input type="text" class="form-control" id="inputNameClass">
        </div>
        <div class="col-md-6">
            <label for="inputDescription" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="inputDescription">
        </div>
        <div class="col-md-6">
            <label for="inputInstructorName" class="form-label">Nome do Instrutor</label>
            <input type="text" class="form-control" id="inputInstructorName">
        </div>
        <div class="col-md-6">
            <label for="inputStudentMax" class="form-label">Máximo de Alunos</label>
            <input type="text" class="form-control" id="inputStudentMax">
        </div>
        
        <div class="col-12 position-relative">
            <div class="position-absolute bottom-2 end-0">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>  

</div>

@endsection