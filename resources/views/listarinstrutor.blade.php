@extends('layout')
@section('title', 'Lista de Instrutores')
@section('conteudo')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Telefone</th>
        <th scope="col">Email</th>
        <th scope="col">Senha</th>
        <th scope="col">Data de Nascimento</th>
        <th scope="col">CPF</th>
        <th scope="col">Endereço</th>
        <th scope="col">Estado</th>
        <th scope="col">Cidade</th>
        <th scope="col">CEP</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Pedro</td>
        <td>7499900-0822</td>
        <td>pedro@ifba</td>
        <td>5321</td>
        <td>12/07/2001</td>
        <td>65909823499</td>
        <td>Rua C</td>
        <td>BA</td>
        <td>Central</td>
        <td>44960000</td>
        <td width=150px>
            <a href='#' class= 'btn btn-success btn-sm'>Editar</a>
            <a href='#' class='btn btn-danger btn-sm'>Excluir</a>
        </td>
      </tr>
    </tbody>
  </table>
    <div class="col-12 position-relative">
        <div class="position-absolute bottom-2 end-0">
            <a class="btn btn-primary btn-lg" href="{{route('aluno.create')}}" role="button">Cadastrar</a>
        </div>
    </div>
@endsection