<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a4a4be15d1.js" crossorigin="anonymous"></script>
 
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  

</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><svg class="secondary-color" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M20.57 14.86L22 13.43 20.57 12 17 15.57 8.43 7 12 3.43 10.57 2 9.14 3.43 7.71 2 5.57 4.14 4.14 2.71 2.71 4.14l1.43 1.43L2 7.71l1.43 1.43L2 10.57 3.43 12 7 8.43 15.57 17 12 20.57 13.43 22l1.43-1.43L16.29 22l2.14-2.14 1.43 1.43 1.43-1.43-1.43-1.43L22 16.29z" fill="currentColor"/></svg></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <button class="btn btn-dark dropdown-toggle secondary-color" data-bs-toggle="dropdown" aria-expanded="false">
              Alunos
            </button>
            <ul class="dropdown-menu dropdown-menu-dark ">
              <a class="nav-link secondary-color" aria-current="page" href="{{route ('listaraluno.index')}}">Listar</a>
              <a class="nav-link secondary-color" aria-current="page" href="{{route ('aluno.create')}}">Cadastrar</a>             
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <button class="btn btn-dark dropdown-toggle secondary-color" data-bs-toggle="dropdown" aria-expanded="false">
              Instrutores
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">             
              <a class="nav-link secondary-color" href="{{route ('listarinstrutor.index')}}">Listar</a>
              <a class="nav-link secondary-color" href="{{route ('instrutor.create')}}">Cadastrar</a>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <button class="btn btn-dark dropdown-toggle secondary-color" data-bs-toggle="dropdown" aria-expanded="false">
              Aulas
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
              <a class="nav-link secondary-color" href="{{route ('listaraula.index')}}">Listar</a>
              <a class="nav-link secondary-color" href="{{route ('aula.create')}}">Cadastrar</a>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <button class="btn btn-dark dropdown-toggle secondary-color" data-bs-toggle="dropdown" aria-expanded="false">
              Exercícios
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
              <a class="nav-link secondary-color" href="{{route ('listarexercicio.index')}}">Listar</a>
              <a class="nav-link secondary-color" href="{{route ('exercicio.create')}}">Cadastrar</a>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <button class="btn btn-dark dropdown-toggle secondary-color" data-bs-toggle="dropdown" aria-expanded="false">
              Relatorios
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
              <a class="nav-link secondary-color" href="{{route ('listarrelatorio.index')}}">Listar</a>
              <a class="nav-link secondary-color" href="{{route ('relatorio.create')}}">Cadastrar</a>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
     <!-- 
      <div class="navbar-nav">
        <a class="nav-link secondary-color" aria-current="page" href="{{route ('aluno.create')}}">Alunos</a>
        <a class="nav-link secondary-color" href="{{route ('instrutor.create')}}">Intrutores</a>
        <a class="nav-link secondary-color" href="{{route ('aula.create')}}">Aulas</a>
        <a class="nav-link secondary-color" href="{{route ('exercicio.create')}}">Treinos</a>
        <a class="nav-link secondary-color" href="{{route ('relatorio.create')}}">Relatorios</a>
      </div>
    </div>
  </div>
</nav>
</nav>
--> 
  @yield('conteudo')

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  {{-- <script src="{{ asset('js/validacao.js') }}"></script> --}}
  <script src="/front/public/js/validacao.js"></script>

</body>
    
</html>