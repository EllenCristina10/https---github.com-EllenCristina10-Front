@extends('layout')
@section('title', 'Lista de Alunos')
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
        <th scope="col">Peso</th>
        <th scope="col">Altura</th>
        <th scope="col">Endereço</th>
        <th scope="col">Estado</th>
        <th scope="col">Cidade</th>
        <th scope="col">CEP</th>
        <th scope="col">Objetivo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Ellen</td>
        <td>7499923-0922</td>
        <td>ellen@ifba</td>
        <td>1234</td>
        <td>12/07/2002</td>
        <td>65</td>
        <td>1.64</td>
        <td>Rua A</td>
        <td>BA</td>
        <td>Ibititá</td>
        <td>44960000</td>
        <td>Ganhar massa muscular</td>
        <td width=150px>
            <a href='#' class= 'btn btn-success btn-sm'>Editar</a>
            <a href='#' class='btn btn-danger btn-sm'>Excluir</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
    <div class="col-12 position-relative">
        <div class="position-absolute bottom-2 end-0">
            <a class="btn btn-primary btn-lg" href="{{route('aluno.create')}}" role="button">Cadastrar</a>
        </div>
    </div>

@endsection