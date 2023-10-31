@extends('layout')
@section('title', 'Edição de Instrutor')
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

        <form class="row" id="form" action="{{ route('instructor.update',['id' => $instructors->id])}}) }}" method="POST">
            @csrf
            @method('PUT')
            {{-- Linha 1 --}}
            <div class="row d-flex justify-content-between mt-4">
                <div class="form-header">
                    <h2>Dados Pessoais</h2>
                </div>
                {{-- Nome completo --}}
                <div class="col-sm-5">
                    <label for="inputNome">Nome Completo:</label>
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                            </svg>
                        </div>
                        <input type="text" class="form-control" id="inputNome" name="nomeInstructor"
                            placeholder="Nome Completo" required>

                        <div class="invalid-feedback">
                            Informe o nome!
                        </div>
                    </div>
                    <span class="spanError" id="errorNome"></span>
                </div>
                {{-- CPF --}}
                <div class="col-sm-2" style="width: 210px">
                    <label for="inputCpf">Cpf:</label>
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-window secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                <path
                                    d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm13 2v2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM2 14a1 1 0 0 1-1-1V6h14v7a1 1 0 0 1-1 1H2z" />
                            </svg>
                        </div>
                        <input type="text" class="form-control" id="inputCpf" name="cpfInstIuctor" placeholder="CPF"
                            required>
                        <div class="invalid-feedback">
                            Informe o CPF!
                        </div>
                    </div>
                    <span class="spanError" id="errorCpf"></span>
                </div>
                {{-- Sexo
                <div class="col-sm-2" style="width: 210px">
                    <label for="inputSexo">Sexo:</label>
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-gender-ambiguous secondary-color" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.5 1a.5.5 0 0 1 0-1h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-3.45 3.45A4 4 0 0 1 8.5 10.97V13H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V14H6a.5.5 0 0 1 0-1h1.5v-2.03a4 4 0 1 1 3.471-6.648L14.293 1H11.5zm-.997 4.346a3 3 0 1 0-5.006 3.309 3 3 0 0 0 5.006-3.31z" />
                            </svg>
                        </div>
                        <select id="inputSexo" class="form-select" required>
                            <option selected disabled value="">Sexo...</option>
                            <option>Masculino</option>
                            <option>Feminino</option>
                            <option>Outro</option>
                        </select>
                        <div class="invalid-feedback">
                            Informe o Sexo!
                        </div>
                    </div>
                </div> --}}
                {{-- Data de nascimento --}}
                <div class="col-sm-2" style="width: 210px">
                    <label for="inputData">Data de Nascimento:</label>
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-calendar-date secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z" />
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                            </svg>
                        </div>
                        <input type="date" class="form-control" id="inputData" name="nascInstructor"
                            placeholder="__/__/____" required>
                        <div class="invalid-feedback">
                            Informe a data de nascimento!
                        </div>
                        <span class="spanError" id="errorData"></span>
                    </div>
                </div>
                {{-- Telefone --}}
                <div class="col-sm-3" style="width: 215px">
                    <label for="inputTelefone">Telefone:</label>
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                        </div>
                        <input type="text" class="form-control" id="inputTelefone" name="telefoneInstructor"
                            placeholder="(xx) x xxxx-xxxx" required>
                        <div class="invalid-feedback">
                            Informe o telefone!
                        </div>
                    </div>
                    <span class="spanError" id="errorTelefone"></span>
                </div>
            </div>
            {{-- Linha 2 --}}
            <div class="custom-spacing"></div>
            <div class="row" style="justify-content: space-between; margin-top: 36px;">
                {{-- Email --}}
                <div class="col-sm-4" style="width: 320px">
                    <label for="inputEmail">Email:</label>
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg>
                        </div>
                        <input type="email" class="form-control" id="inputEmail" name="emailInstructor"
                            placeholder="Email" required>
                        <div class="invalid-feedback">
                            Informe o email!
                        </div>
                    </div>
                    <span class="spanError" id="errorEmail"></span>
                </div>
                {{-- Senha --}}
                <div class="col-sm-2" id="senha" style="width: 250px">
                    <label for="inputSenha">Senha:</label>
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-key secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                                <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg>
                        </div>
                        <input type="password" class="form-control border-right-0" id="inputSenha"
                            placeholder="Digite sua senha" required onblur="validarSenhas(this.value)">
                        <div class="invalid-feedback">
                            Informe a senha!
                        </div>

                        <span class="input-group-text" onclick="togglePassword('inputSenha')"
                            style="cursor: pointer; border-left: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="background-icon-color" class="bi bi-eye secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                <path
                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg>
                        </span>

                    </div>
                    <span class="spanError" id="errorSenha"></span>
                </div>
                <!-- Confirmação de senha -->
                <div class="col-sm-3" id="confirmasenha" style="width: 275px">
                    <label for="inputConfirmarSenha">Confirmação de senha:</label>
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-key secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                                <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg>
                        </div>
                        <input type="password" class="form-control border-right-0" id="inputConfirmarSenha"
                            placeholder="Confirme sua senha " required onblur="validarSenhas(this.value)">
                        <div class="invalid-feedback">
                            Confirme a senha!
                        </div>

                        <span class="input-group-text" onclick="togglePassword('inputConfirmarSenha')"
                            style="cursor: pointer; border-left: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="background-icon-color" class="bi bi-eye secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                <path
                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg>
                        </span>
                    </div>
                    <span class="spanError" id="errorConfirmarSenha"></span>
                </div>
                {{-- Entrada --}}
                <div class="col-sm-2">
                    <label for="inputEntrada">Horario de Entrada</label>
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-hourglass-top secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M2 14.5a.5.5 0 0 0 .5.5h11a.5.5 0 1 0 0-1h-1v-1a4.5 4.5 0 0 0-2.557-4.06c-.29-.139-.443-.377-.443-.59v-.7c0-.213.154-.451.443-.59A4.5 4.5 0 0 0 12.5 3V2h1a.5.5 0 0 0 0-1h-11a.5.5 0 0 0 0 1h1v1a4.5 4.5 0 0 0 2.557 4.06c.29.139.443.377.443.59v.7c0 .213-.154.451-.443.59A4.5 4.5 0 0 0 3.5 13v1h-1a.5.5 0 0 0-.5.5zm2.5-.5v-1a3.5 3.5 0 0 1 1.989-3.158c.533-.256 1.011-.79 1.011-1.491v-.702s.18.101.5.101.5-.1.5-.1v.7c0 .701.478 1.236 1.011 1.492A3.5 3.5 0 0 1 11.5 13v1h-7z" />
                            </svg>
                        </div>
                        <input type="time" class="form-control" id="inputEntrada" name="entradaInstructor"
                            placeholder="Entrada" required>
                        <div class="invalid-feedback">
                            Informe o horário da entrada!
                        </div>
                    </div>
                    <span class="spanError" id="errorEntrada"></span>
                </div>
                <div class="custom-spacing"></div>
                {{-- Saída --}}
                <div class="col-sm-2">
                    <label for="inputSaida">Horario de Saida</label>
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-hourglass-bottom secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5zm2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702s.18.149.5.149.5-.15.5-.15v-.7c0-.701.478-1.236 1.011-1.492A3.5 3.5 0 0 0 11.5 3V2h-7z" />
                            </svg>
                        </div>
                        <input type="time" class="form-control" id="inputSaida" name="saidaInstructor"
                            placeholder="Saída" required>
                        <div class="invalid-feedback">
                            Informe o horário da saída!
                        </div>
                    </div>
                    <span class="spanError" id="errorSaida"></span>
                </div>
            </div>
            {{-- Linha 3 --}}

            <div class="row" style="justify-content: space-between; margin-top: 36px;">
                <div class="custom-spacing2"></div>
                <div class="row d-flex justify-content-between mt-4">
                    {{-- Endereço --}}
                    <div class="col-sm-3">
                        <label for="inputEndereco">Endereço:</label>
                        <div class="input-group">
                            <div class="input-group-text background-icon-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-map secondary-color" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
                                </svg>
                            </div>
                            <input type="text" class="form-control" id="inputEndereco" name="enderecoInstructor"
                                placeholder="Digite seu endereço" required>
                            <div class="invalid-feedback">
                                Informe o endereço!
                            </div>

                        </div>
                        <span class="spanError" id="errorEndereco"></span>
                    </div>
                    {{-- Número --}}
                    <div class="col-sm-1" style="width: 140px">
                        <label for="inputNumero">Número:</label>
                        <div class="input-group">
                            <div class="input-group-text background-icon-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-geo-alt secondary-color" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                            </div>
                            <input type="text" class="form-control" id="inputNumero" name="numeroInstructor"
                                placeholder="XXXX" required>
                            <div class="invalid-feedback">
                                Informe o número!
                            </div>
                            <span class="spanError" id="errorNumero"></span>
                        </div>
                    </div>
                    {{-- Estado --}}
                    <div class="col-sm-1" style="width: 140px">
                        <label for="inputEstado">UF:</label>
                        <div class="input-group">
                            <div class="input-group-text background-icon-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-geo-alt secondary-color" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                            </div>
                            <select class="form-select" id="inputEstado" name="estadoInstructor" required>
                                <option selected disabled value=""></option>
                            </select>
                        </div>
                        <span class="spanError" id="errorEstado"></span>
                    </div>
                    {{-- Cidade --}}
                    <div class="col-sm-3">
                        <label for="inputCidade">Cidade:</label>
                        <div class="input-group">
                            <div class="input-group-text background-icon-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-houses secondary-color" viewBox="0 0 16 16">
                                    <path
                                        d="M5.793 1a1 1 0 0 1 1.414 0l.647.646a.5.5 0 1 1-.708.708L6.5 1.707 2 6.207V12.5a.5.5 0 0 0 .5.5.5.5 0 0 1 0 1A1.5 1.5 0 0 1 1 12.5V7.207l-.146.147a.5.5 0 0 1-.708-.708L5.793 1Zm3 1a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Zm.707.707L5 7.207V13.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5V7.207l-4.5-4.5Z" />
                                </svg>
                            </div>
                            <select class="form-select" id="inputCidade" name="cidadeInstructor" required>
                                <option selected disabled value=""></option>
                            </select>
                            <div class="invalid-feedback">
                                Informe a cidade!
                            </div>
                            <span class="spanError" id="errorCidade"></span>
                        </div>
                    </div>
                    {{-- CEP --}}
                    <div class="col-sm-2">
                        <label for="inputCep">CEP:</label>
                        <div class="input-group">
                            <div class="input-group-text background-icon-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-truck secondary-color" viewBox="0 0 16 16">
                                    <path
                                        d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                </svg>
                            </div>
                            <input type="text" class="form-control" id="inputCep" name="cepInstructor"
                                placeholder="Digite o CEP" required>
                            <div class="invalid-feedback">
                                Informe o CEP!
                            </div>
                        </div>
                        <span class="spanError" id="errorCep"></span>
                    </div>
                </div>
            </div>
            <div class="row" style="justify-content: end; margin-top: 36px;">
                <div class="col-md-1"><button class="btn btn-success" type="submit"
                        id="submitButton">Atualizar</button></div>
            </div>
        </form>
    </div>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Erro</h5>
                </div>
                <div class="modal-body">
                    <p id="modalErrorMessage">Preencha todos os campos corretamente antes de enviar o formulário.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="fecharModal">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const urlEstados = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados'
        const estado = document.getElementById('inputEstado')
        const cidade = document.getElementById('inputCidade')


        estado.addEventListener('change', async function() {
            const urlCidades = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/' + estado.value +
                '/municipios'
            const request = await fetch(urlCidades)
            const response = await request.json()
            let options = ''
            response.forEach(function(cidade) {
                options += '<option>' + cidade.nome + '</option>'

            })
            cidade.innerHTML = options
        })


        window.addEventListener('load', async () => {
            const request = await fetch(urlEstados)
            const response = await request.json()


            const options = document.createElement("optgroup")
            options.setAttribute('label', 'estados')
            response.forEach(function(uf) {
                options.innerHTML += '<option>' + uf.sigla + '</option>'
            })

            estado.append(options)
        })

        function validarCampos() {
            const campos = [
                { campo: inputNome, nome: "Nome Completo" },
                { campo: inputCpf, nome: "CPF" },
                { campo: inputData, nome: "Data de Nascimento" },
                { campo: inputTelefone, nome: "Telefone" },
                { campo: inputEmail, nome: "E-mail" },
                { campo: inputSenha, nome: "Senha" },
                { campo: inputConfirmarSenha, nome: "Confirmar Senha" },
                { campo: inputEndereco, nome: "Endereço" },
                { campo: inputEntrada, nome: "Horario de Entrada" },
                { campo: inputSaida, nome: "Horario de Saida" },
                { campo: inputNumero, nome: "Número" },
                { campo: inputEstado, nome: "Estado" },
                { campo: inputCidade, nome: "Cidade" },
                { campo: inputCep, nome: "CEP" }
            ];

            for (const {
                    campo,
                    nome
                }
                of campos) {
                if (!campo.style.borderColor || campo.style.borderColor !== "green") {
                    document.getElementById('modalErrorMessage').textContent =
                        `Por favor preencha adequadamente o campo "${nome}" .`;
                    $('#myModal').modal('show');
                    return false;
                }
            }
            return true;
        }
    </script>

    <script src="{{ asset('js/validacao.js') }}"></script>
@endsection
