@extends('layout')
@section('title', 'Cadastro Aluno')
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
        {{-- Definindo as linhas --}}

        <form class="row" id="form" action="{{ route('student.store') }}" method="POST">
            @csrf
            {{-- Linha 1 --}}
            <div class="row d-flex justify-content-center mt-4">
                <div class="form-header">
                    <h2>Dados Pessoais</h2>
                </div>
                <div class="col-sm-2">
                    <div class="avatar-container">
                        <div class="avatar">
                            <input type="file" id="inputImage" name="photo" style="display: none;" accept="image/*">
                            <label for="inputImage">
                                <div class="image-container" id="imageContainer">
                                    <img id="avatarImage" class="avatar-image">
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                                    class="bi bi-person-add" viewBox="0 0 16 16">
                                    <path
                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                    <path
                                        d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8.5 10c.26 0 .507.009.740.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                                </svg>
                            </label>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        Insira a foto!
                    </div>
                </div>
                <div class="row d-flex justify-content-start mt-4">

                    {{-- Nome completo --}}
                    <div class="col-sm-5">
                        <label for="inputNome">Nome Completo:</label>
                        <div class="input-group ">

                            <div class="input-group-text  background-icon-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person secondary-color" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg>
                            </div>

                            <input type="text" class="form-control" id="inputNome" name = "nomeStudent"
                                placeholder="Digite seu nome" required>

                            <div class="invalid-feedback">
                                Informe o nome!
                            </div>
                        </div>
                        <span class="spanError" id="errorNome"></span>
                    </div>
                    {{-- Data de nascimento --}}
                    <div class="col-sm-2" style="width: 210px">
                        <label for="inputData">Data de nascimento:</label>
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

                            <input type="date" class="form-control" id="inputData" name="nascStudent" required
                                min="1900-01-01" max="2023-10-20" required>
                            <div class="invalid-feedback">
                                Informe a data de nascimento!
                            </div>
                        </div>
                        <span class="spanError" id="errorData"></span>
                    </div>
                    {{-- CPF --}}
                    <div class="col-sm-2" style="width: 210px">
                        <label for="inputCpf">CPF:</label>
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

                            <input type="text" class="form-control rounded-right" id="inputCpf" name="cpfStudent"
                                placeholder="xxx.xxx.xxx-xx" required>
                            <div class="invalid-feedback">
                                Informe o CPF!
                            </div>
                        </div>
                        <span class="spanError" id="errorCpf"></span>
                    </div>
                    {{-- Sexo --}}
                    <div class="col-sm-3" style="width: 200px">
                        <label for="inputSexo">Sexo:</label>
                        <div class="input-group">

                            <div class="input-group-text background-icon-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-gender-ambiguous secondary-color"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M11.5 1a.5.5 0 0 1 0-1h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-3.45 3.45A4 4 0 0 1 8.5 10.97V13H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V14H6a.5.5 0 0 1 0-1h1.5v-2.03a4 4 0 1 1 3.471-6.648L14.293 1H11.5zm-.997 4.346a3 3 0 1 0-5.006 3.309 3 3 0 0 0 5.006-3.31z" />
                                </svg>
                            </div>

                            <select id="inputSexo" class="form-select" name="sexoStudent" required>
                                <option selected disabled value="">...</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                                <option>Outro</option>
                            </select>
                            <div class="invalid-feedback">
                                Informe o Sexo!
                            </div>
                            <span class="spanError" id="errorSexo"></span>
                        </div>
                    </div>
                    <div class="custom-spacing"></div>
                    {{-- Peso --}}
                    <div class="col-sm-2" style="width: 230px">
                        <label for="inputPeso">Peso:</label>
                        <div class="input-group">

                            <div class="input-group-text background-icon-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-rulers secondary-color" viewBox="0 0 16 16">
                                    <path
                                        d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1H1z" />
                                </svg>
                            </div>

                            <input type="text" class="form-control rounded-right" id="inputPeso" name="pesoStudent"
                                placeholder="Digite seu peso" required>
                            <div class="invalid-feedback">
                                Informe seu peso!
                            </div>
                        </div>
                        <span class="spanError" id="errorPeso"></span>
                    </div>
                    {{-- Altura --}}
                    <div class="col-sm-2" style="width: 230px">
                        <label for="inputAltura">Altura:</label>
                        <div class="input-group">

                            <div class="input-group-text background-icon-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-rulers secondary-color" viewBox="0 0 16 16">
                                    <path
                                        d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1H1z" />
                                </svg>
                            </div>

                            <input type="text" class="form-control rounded-right" id="inputAltura"
                                name="alturaStudent" placeholder="Sua altura em cm" required>
                            <div class="invalid-feedback">
                                Informe sua altura!
                            </div>
                        </div>
                        <span class="spanError" id="errorAltura"></span>
                    </div>
                </div>
            </div>

            {{-- Linha 2 --}}
            <div class="custom-spacing2"></div>
            <div class="row d-flex justify-content-between mt-4">
                {{-- Telefone --}}
                <div class="col-sm-3"style="width: 225px">
                    <label for="inputTelefone">Telefone:</label>
                    <div class="input-group">

                        <div class="input-group-text background-icon-color ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                        </div>

                        <input type="text" class="form-control" id="inputTelefone" name="telStudent"
                            placeholder="(xx) xxxxx-xxxx" required>
                        <div class="invalid-feedback">
                            Informe o telefone!
                        </div>
                    </div>
                    <span class="spanError" id="errorTelefone"></span>
                </div>
                {{-- Email --}}
                <div class="col-sm-4" style="width: 360px">
                    <label for="inputEmail">Email:</label>
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg>
                        </div>
                        <input type="email" class="form-control" id="inputEmail" name = "emailStudent"
                            placeholder="Digite seu email" required>
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
                        <input type="password" class="form-control border-right-0" id="inputSenha" name="senhaStudent"
                            placeholder="Digite sua senha" required>
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
                            name="confirmSenhaStudent" placeholder="Confirme sua senha " required>
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
            </div>
            {{-- Linha 3 --}}
            <div class="custom-spacing2"></div>
            <div class="row d-flex justify-content-between mt-4">
                {{-- Endereço --}}
                <div class="col-sm-3">
                    <label for="inputEndereco">Endereço:</label>
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-map secondary-color" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
                            </svg>
                        </div>
                        <input type="text" class="form-control" id="inputEndereco" name="enderecoStudent"
                            placeholder="Digite seu endereço" required>
                        <div class="invalid-feedback">
                            Informe o endereço!
                        </div>
                        <span class="spanError" id="errorEndereco"></span>
                    </div>
                </div>
                {{-- Número --}}
                <div class="col-sm-1" style="width: 140px">
                    <label for="inputNumero">Número:</label>
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </div>
                        <input type="text" class="form-control" id="inputNumero" name="numeroStudent"
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </div>
                        <select class="form-select" id="inputEstado" name="estadoStudent" required>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-houses secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M5.793 1a1 1 0 0 1 1.414 0l.647.646a.5.5 0 1 1-.708.708L6.5 1.707 2 6.207V12.5a.5.5 0 0 0 .5.5.5.5 0 0 1 0 1A1.5 1.5 0 0 1 1 12.5V7.207l-.146.147a.5.5 0 0 1-.708-.708L5.793 1Zm3 1a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Zm.707.707L5 7.207V13.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5V7.207l-4.5-4.5Z" />
                            </svg>
                        </div>
                        <select class="form-select" id="inputCidade" name="cidadeStudent" required>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-truck secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg>
                        </div>
                        <input type="text" class="form-control" id="inputCep" name="cepStudent"
                            placeholder="Digite o CEP" required>
                        <div class="invalid-feedback">
                            Informe o CEP!
                        </div>
                    </div>
                    <span class="spanError" id="errorCep"></span>
                </div>
            </div>
            {{-- Linha 4 --}}
            <div class="custom-spacing2"></div>
            <div class="row d-flex justify-content-start mt-4">
                {{-- Instrutor --}}
                <div class="col-sm-4" style="max-width: 700px">
                    <label for="inputInstrutor">Instrutor:</label>
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                            </svg>
                        </div>
                        <select id="inputInstrutor" class="form-select" name="instrutorStudent" required>
                            <option selected disabled value=""> Instrutor...</option>
                            <option>Ricardo</option>
                            <option>Alan Jefferson</option>
                            <option>Fernanda</option>
                            <option>Juliana Bonde</option>
                        </select>
                        <div class="invalid-feedback">
                            Informe o Instrutor!
                        </div>
                        <span class="spanError" id="errorInstrutor"></span>
                    </div>
                </div>
                {{-- Turno --}}
                <div class="col-sm-4" style="max-width: 700px">
                    <label for="inputTurno">Turno:</label>
                    <div class="input-group">
                        <div class="input-group-text background-icon-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-clock secondary-color" viewBox="0 0 16 16">
                                <path
                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg>
                        </div>
                        <select id="inputTurno" class="form-select" required>
                            <option selected disabled value=""> Turno...</option>
                            <option name="matutino">Matutino</option>
                            <option>Vespertino</option>
                            <option>Noturno</option>
                        </select>
                        <div class="invalid-feedback">
                            Informe o Turno!
                        </div>
                        <span class="spanError" id="errorTurno"></span>
                    </div>
                </div>
            </div>

            {{-- Linha 6 --}}
            <p><br><br></p>
            <div class="form-header">
                <h2>Anamnese</h2>
            </div>
            {{-- <div class="row" style="justify-content: space-between; margin-top: 36px;"> --}}
            {{-- <div class="container mt-4">
                <h2>1.Atividades da vida diária</h2>
            </div> --}}
            {{-- Horas trabalhadas --}}
            <div class="subtitle-header">
                <h3>Horas de trabalho semanais:</h3>
            </div>
            <div class="row mt-4">
                <div class="col-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="numHorasSemanais" value="menos de 20"
                            id="menosde20">
                        <label class="form-check-label" for="menosde20">
                            Menos de 20
                        </label>
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="numHorasSemanais" value="41 a 60"
                            id="41a60">
                        <label class="form-check-label" for="41a60">
                            41 a 60
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="numHorasSemanais" value="20 a 40"
                            id="20a40">
                        <label class="form-check-label" for="20a40">
                            20 a 40
                        </label>
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="numHorasSemanais" value="nunca"
                            id="maisde60">
                        <label class="form-check-label" for="maisde60">
                            Mais de 60
                        </label>
                    </div>
                </div>
            </div>
            {{-- Atividades desempenhadas --}}
            <p><br>
                <hr><br>
            </p>
            <div class="subtitle-header">
                <h3>Atividades desempenhadas no trabalho: </h3>
            </div>
            <div class="row mt-4">
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="sentarnacadeira" required>
                        <label class="form-check-label" for="sentarnacadeira">
                            Sentar na cadeira
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="Levantaecarregar" required>
                        <label class="form-check-label" for="Levantaecarregar">
                            Levantar ou carregar peso
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="ficardepe" required>
                        <label class="form-check-label" for="ficardepe">
                            Ficar de pé
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="caminhar" required>
                        <label class="form-check-label" for="caminhar">
                            Caminhar
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="dirigir" required>
                        <label class="form-check-label" for="dirigir">
                            Dirigir
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="checkOutrosTrabalho" required>
                        <label class="form-check-label" for="checkOutrosTrabalho">
                            Outros
                        </label>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="form-floating" style="display: none;" id="textOutrosTrabalho">
                    <textarea class="form-control w-75 h-100" id="txtareaOutrosTrabalhos"> </textarea>
                    <label for="txtareaOutrosTrabalhos">Descrição:</label>
                </div>
            </div>
            <div class="invalid-feedback">
                Informe as atividades!
            </div>

            {{-- Linha 7 --}}
            <p><br>
                <hr><br>
            </p>
            <div class="subtitle-header">
                <h3>Data do último exame físico e/ou médico:</h3>
            </div>
            {{-- Último exame --}}

            <div style="width: 225px">
                <input type="date" class="form-control" id="inputDataExame" required>
                <div class="invalid-feedback">
                    Informe a data do último exame!
                </div>

                <span class="spanError" id="errorDataUltimoExame"></span>
            </div>
            {{-- Cardiopatia --}}
            <p><br>
                <hr><br>
            </p>
            <div class="subtitle-header">
                <h3>Marque aquele(s) que tenha(m) tido alguma cardiopatia antes dos 50 anos: </h3>
            </div>
            <div class="row mt-4">
                <div class="col-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="pai">
                        <label class="form-check-label" for="pai">
                            Pai
                        </label>
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="mae">
                        <label class="form-check-label" for="mae">
                            Mãe
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="irmao">
                        <label class="form-check-label" for="irmao">
                            Irmão(ã)
                        </label>
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="avoAvo">
                        <label class="form-check-label" for="avoAvo">
                            Avô/Avó
                        </label>
                    </div>
                </div>
            </div>
            {{-- Intervenções cirúrgicas --}}
            <p><br>
                <hr><br>
            </p>
            <div class="subtitle-header">
                <h3>Marque as intervenções cirúrgicas que você tenha feito: </h3>
            </div>
            <div class="row mt-4">
                <div class="col-sm-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="coluna">
                        <label class="form-check-label" for="coluna">
                            Coluna
                        </label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="rim">
                        <label class="form-check-label" for="rim">
                            Rim
                        </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="coracao">
                        <label class="form-check-label" for="coracao">
                            Coração
                        </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="pulmao">
                        <label class="form-check-label" for="pulmao">
                            Pulmão
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="articulacao">
                        <label class="form-check-label" for="articulacao">
                            Articulação
                        </label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="olhos">
                        <label class="form-check-label" for="olhos">
                            Olhos
                        </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="herniaDisco">
                        <label class="form-check-label" for="herniaDisco">
                            Hérnia de Disco
                        </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="checkOutrosCirurgia">
                        <label class="form-check-label" for="checkOutrosCirurgia">
                            Outra
                        </label>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="form-floating" id="textOutrosCirurgia" style="display: none">
                    <textarea class="form-control w-75 h-100" id="IntervencaoOutros"></textarea>
                    <label for="IntervencaoOutros">Descrição:</label>
                </div>
            </div>

            {{-- Problemas diagnosticados --}}
            <p><br>
                <hr><br>
            </p>
            <div class="subtitle-header">
                <h3>Marque o(s) problema(s) abaixo que tenha sido diagnosticado(a) ou tratado(a) por um médico:</h3>
            </div>
            <div class="row mt-4">
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="alcoolismo">
                        <label class="form-check-label" for="alcoolismo">
                            Alcoolismo
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="artrite">
                        <label class="form-check-label" for="artrite">
                            Artrite
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="diabetes">
                        <label class="form-check-label" for="diabetes">
                            Diabetes
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="problemasmusculares">
                        <label class="form-check-label" for="problemasmusculares">
                            Problemas musculares
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="problemarenal">
                        <label class="form-check-label" for="problemarenal">
                            Problema renal
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id=" problemasOculares">
                        <label class="form-check-label" for=" problemasOculares">
                            Problemas oculares
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="PressaoArterialAlta">
                        <label class="form-check-label" for="PressaoArterialAlta">
                            Pressão arterial alta
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="enfisema">
                        <label class="form-check-label" for="enfisema">
                            Enfisema
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="ulcera">
                        <label class="form-check-label" for="ulcera">
                            Úlcera
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="AVC">
                        <label class="form-check-label" for="AVC">
                            AVC
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="ProblemasAnemia">
                        <label class="form-check-label" for="ProblemasAnemia">
                            Anemia
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="asma">
                        <label class="form-check-label" for="asma">
                            Asma
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="anemia">
                        <label class="form-check-label" for="anemia">
                            Anemia
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="obesidade">
                        <label class="form-check-label" for="obesidade">
                            Obesidade
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="checkOutrosDiagnosticado">
                        <label class="form-check-label" for="checkOutrosDiagnosticado">
                            Outro
                        </label>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="form-floating" id="textOutrosDiagnosticado" style="display: none">
                    <textarea class="form-control w-75 h-100" id="textAreaOutrosDiagnosticado"></textarea>
                    <label for="textAreaOutrosDiagnosticado">Descrição:</label>
                </div>
            </div>
            {{-- Medicamentos --}}
            <p><br>
                <hr><br>
            </p>
            <div class="subtitle-header">
                <h3>Descreva o(s) medicamento(s) utlizado(s) nos últimos tempos:</h3>
            </div>
            <div class="mt-4">
                <div class="form-floating">
                    <textarea class="form-control w-75 h-100" style="max-height: 200px;" id="descricaoMedicamentos"></textarea>
                    <label for="descricaoMedicamentos">Descrição:</label>
                </div>
            </div>
            {{-- Linha 12 --}}
            <div>
                {{-- Sintomas --}}
                <p><br>
                    <hr><br>
                </p>
                <div>
                    <div class="subtitle-header">
                        <h3>Indique os sintomas conforme segue:</h3>
                    </div>
                    <div class="container mt-4">
                        <h5>A&#41; Tosse com sangue</h5>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tosseComSangue" value="sempre"
                                    id="Tossesempre">
                                <label class="form-check-label" for="Tossesempre">
                                    Sempre
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tosseComSangue"
                                    value="algumasVezes" id="TossealgumasVezes">
                                <label class="form-check-label" for="TossealgumasVezes">
                                    Algumas vezes
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tosseComSangue" value="nunca"
                                    id="Tossenunca">
                                <label class="form-check-label" for="Tossenunca">
                                    Nunca
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <h5>B&#41 Dor abdominal</h5>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dorabdonminal" value="sempre"
                                id="abdominalsempre">
                            <label class="form-check-label" for="abdominalsempre">
                                Sempre
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dorabdonminal" value="algumasVezes"
                                id="abdominalalgumasVezes">
                            <label class="form-check-label" for="abdominalalgumasVezes">
                                Algumas vezes
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dorabdonminal" value="nunca"
                                id="abdominalnunca">
                            <label class="form-check-label" for="abdominalnunca">
                                Nunca
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container mt-4">
                        <h5> C&#41 Dor nas pernas </h5>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dornaspernas" value="sempre"
                                    id="pernassempre">
                                <label class="form-check-label" for="pernassempre">
                                    Sempre
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dornaspernas" value="algumasVezes"
                                    id="pernasalgumasVezes">
                                <label class="form-check-label" for="pernasalgumasVezes">
                                    Algumas vezes
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dornaspernas" value="nunca"
                                    id="pernasnunca">
                                <label class="form-check-label" for="pernasnunca">
                                    Nunca
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container mt-4">
                        <h5>D&#41 Dor nos braços</h5>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dornosbraços" value="sempre"
                                    id="bracossempre">
                                <label class="form-check-label" for="bracossempre">
                                    Sempre
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dornosbraços" value="algumasVezes"
                                    id="bracosalgumasVezes">
                                <label class="form-check-label" for="bracosalgumasVezes">
                                    Algumas vezes
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dornosbraços" value="nunca"
                                    id="bracosnunca">
                                <label class="form-check-label" for="bracosnunca">
                                    Nunca
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container mt-4">
                        <h5>E&#41 Dor nas costas ou pescoço</h5>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dornascostasoupescoco"
                                    value="sempre" id="costasPescocosempre">
                                <label class="form-check-label" for="costasPescocosempre">
                                    Sempre
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dornascostasoupescoco"
                                    value="algumasVezes" id="costasPescocoalgumasVezes">
                                <label class="form-check-label" for="costasPescocoalgumasVezes">
                                    Algumas vezes
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dornascostasoupescoco"
                                    value="nunca" id="costasPescoconunca">
                                <label class="form-check-label" for="costasPescoconunca">
                                    Nunca
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container mt-4">
                        <h5> F&#41 Dor no peito </h5>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dornopeito" value="sempre"
                                    id="dornopeitosempre">
                                <label class="form-check-label" for="dornopeitosempre">
                                    Sempre
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dornopeito" value="algumasVezes"
                                    id="dornopeitoalgumasVezes">
                                <label class="form-check-label" for="dornopeitoalgumasVezes">
                                    Algumas vezes
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dornopeito" value="nunca"
                                    id="dornopeitonunca">
                                <label class="form-check-label" for="dornopeitonunca">
                                    Nunca
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container mt-4">
                        <h5> G&#41 Dores articulares </h5>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="doresarticulares" value="sempre"
                                    id="doresarticularessempre">
                                <label class="form-check-label" for="doresarticularessempre">
                                    Sempre
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="doresarticulares"
                                    value="algumasVezes" id="doresarticularesalgumasVezes">
                                <label class="form-check-label" for="doresarticularesalgumasVezes">
                                    Algumas vezes
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="doresarticulares" value="nunca"
                                    id="doresarticularesnunca">
                                <label class="form-check-label" for="doresarticularesnunca">
                                    Nunca
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container mt-4">
                        <h5> H&#41 Falta de ar com esforço leve </h5>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Faltadearcomesforçoleve"
                                    value="sempre" id="Faltadearsempre">
                                <label class="form-check-label" for="Faltadearsempre">
                                    Sempre
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Faltadearcomesforçoleve"
                                    value="algumasVezes" id="FaltadearalgumasVezes">
                                <label class="form-check-label" for="FaltadearalgumasVezes">
                                    Algumas vezes
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Faltadearcomesforçoleve"
                                    value="nunca" id="Faltadearnunca">
                                <label class="form-check-label" for="Faltadearnunca">
                                    Nunca
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container mt-4">
                        <h5> I&#41 Sentir-se fraco</h5>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sentirsefraco" value="sempre"
                                    id="sentirsefracosempre">
                                <label class="form-check-label" for="sentirsefracosempre">
                                    Sempre
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sentirsefraco" value="algumasVezes"
                                    id="sentirsefracoalgumasVezes">
                                <label class="form-check-label" for="sentirsefracoalgumasVezes">
                                    Algumas vezes
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sentirsefraco" value="nunca"
                                    id="sentirsefraconunca">
                                <label class="form-check-label" for="sentirsefraconunca">
                                    Nunca
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container mt-4">
                        <h5> J&#41 Tontura</h5>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tontura" value="sempre"
                                    id="tonturasempre">
                                <label class="form-check-label" for="tonturasempre">
                                    Sempre
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tontura" value="algumasVezes"
                                    id="tonturaalgumasVezes">
                                <label class="form-check-label" for="tonturaalgumasVezes">
                                    Algumas vezes
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tontura" value="nunca"
                                    id="tonturanunca">
                                <label class="form-check-label" for="tonturanunca">
                                    Nunca
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container mt-4">
                        <h5> K&#41 Palpitação ou batimento cardíaco acelerado</h5>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="palpitação" value="sempre"
                                    id="palpitacaosempre">
                                <label class="form-check-label" for="palpitacaosempre">
                                    Sempre
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="palpitação"
                                    value="algumasVezes" id="palpitacaoalgumasVezes">
                                <label class="form-check-label" for="palpitacaoalgumasVezes">
                                    Algumas vezes
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="palpitação" value="nunca"
                                    id="palpitacaonunca">
                                <label class="form-check-label" for="palpitacaonunca">
                                    Nunca
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Linha 14 --}}
            {{-- Alergias --}}
            <p><br>
                <hr><br>
            </p>
            <div class="subtitle-header">
                <h3>Você possui alguma alergia?</h3>
            </div>
            <div class="row mt-4">
                <div class="col-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="alergia" value="sim"
                            id="checkAlergiaSim">
                        <label class="form-check-label" for="checkAlergiaSim">
                            Sim
                        </label>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="alergia" value="nao"
                            id="checkAlergiaNao">
                        <label class="form-check-label" for="checkAlergiaNao">
                            Não
                        </label>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="form-floating" id="textOutrosAlergia" style="display: none">
                    <textarea class="form-control w-75 h-100" id="floatingTextareaAlergia"></textarea>
                    <label for="floatingTextareaAlergia">Qual(is)?</label>
                </div>
            </div>
            {{-- Linha 15 --}}
            {{-- Acidentes --}}
            <p><br>
                <hr><br>
            </p>
            <div class="subtitle-header">
                <h3>Nos últimos tempos, você sofreu algum acidente ou lesão ósteo-articular?</h3>
            </div>
            <div class="row mt-4">
                <div class="col-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="acidente" value="sim"
                            id="checkAcidenteSim">
                        <label class="form-check-label" for="checkAcidenteSim">
                            Sim
                        </label>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="acidente" value="nao"
                            id="checkAcidenteNao">
                        <label class="form-check-label" for="checkAcidenteNao">
                            Não
                        </label>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="form-floating" id="textOutrosAcidente" style="display: none">
                    <textarea class="form-control w-75 h-100" id="floatingTextareaAcidente"></textarea>
                    <label for="floatingTextareaAlergia">Qual(is)?</label>
                </div>
            </div>
            {{-- Linha 16 --}}
            {{-- Restrições --}}
            <p><br>
                <hr><br>
            </p>
            <div class="subtitle-header">
                <h3>Você possui alguma restrição à prática de atividade física?</h3>
            </div>
            <div class="row mt-4">
                <div class="col-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="restricao" value="sim"
                            id="restricaoSim">
                        <label class="form-check-label" for="restricaoSim">
                            Sim
                        </label>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="restricao" value="nao"
                            id="restricaoNao">
                        <label class="form-check-label" for="restricaoNao">
                            Não
                        </label>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="form-floating" id="texRestricao" style="display: none">
                        <textarea class="form-control w-75 h-100" id="Restricao"></textarea>
                        <label for="Restricao">Quais?</label>
                    </div>
                </div>
            </div>
            {{-- Linha 17 --}}
            {{-- Fumante --}}
            <p><br>
                <hr><br>
            </p>

            <div class="subtitle-header">
                <h3>Você fuma atualmente?</h3>
            </div>
            <div class="row mt-4">
                <div class="col-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fuma" value="sim"
                            id="fumaSim">
                        <label class="form-check-label" for="fumaSim">
                            Sim
                        </label>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fuma" value="nao"
                            id="fumaNao">
                        <label class="form-check-label" for="fumaNao">
                            Não
                        </label>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="form-floating" id="textFuma" style="display: none">
                    <textarea class="form-control w-75 h-100" id="cigarros"></textarea>
                    <label for="cigarros">Quantos cigarros por dia?</label>
                </div>
            </div>
            {{-- Linha 7 --}}
            {{-- Experiência --}}
            <p><br>
                <hr><br>
            </p>
            <div class="subtitle-header">
                <h3>Atualmente, você realiza alguma atividade física?</h3>
            </div>
            <div class="row mt-4">
                <div class="col-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sedentario" value="sim"
                            id="sedentarioSim">
                        <label class="form-check-label" for="sedentarioSim">
                            Sim
                        </label>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sedentario" value="nao"
                            id="sedentarioNao">
                        <label class="form-check-label" for="sedentarioNao">
                            Não
                        </label>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="form-floating" id="textAreasAtividade" style="display: none">
                    <textarea class="form-control w-75 h-100" id="atividadeText"></textarea>
                    <label for="atividadeText">Qual(is)?</label>
                </div>
            </div>
            <div class="mt-4">
                <div class="form-floating" id="textAreasFrequencia" style="display: none">
                    <textarea class="form-control w-75 h-100" id="frequenciaText"></textarea>
                    <label for="frequenciaText">Frequência?</label>
                </div>
            </div>
            <div class="mt-4">
                <div class="form-floating" id="textAreasDuracao" style="display: none">
                    <textarea class="form-control w-75 h-100" id="duracaoText"></textarea>
                    <label for="duracaoText">Duração?</label>
                </div>
            </div>

            {{-- Objetivos --}}
            <p><br>
                <hr><br>
            </p>
            <div class="subtitle-header">
                <h3>Objetivos com relação a atividade física: </h3>
            </div>
            <div class="row mt-4">
                <div class="col-sm-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="Estética">
                        <label class="form-check-label" for="Estética">
                            Estética
                        </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="Lazer">
                        <label class="form-check-label" for="Lazer">
                            Lazer
                        </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="Terapeutico">
                        <label class="form-check-label" for="Terapeutico">
                            Terapêutico
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="Condicionamento">
                        <label class="form-check-label" for="Condicionamento">
                            Condicionamento físico
                        </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="Conviviosocial">
                        <label class="form-check-label" for="Conviviosocial">
                            Convívio social
                        </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="Emagrecimento">
                        <label class="form-check-label" for="Emagrecimento">
                            Emagrecimento
                        </label>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="form-floating">
                    <textarea class="form-control w-75 h-100" id="ObjetivoOutros"></textarea>
                    <label for="ObjetivoOutros">Outros?</label>
                </div>
            </div>
            {{-- Linha 18 --}}
            <p><br>
                <hr><br>
            </p>
            <div class="row">
                <div class="subtitle-header">
                    <h3>Comentários gerais</h3>
                </div>
                <div class="container mt-4">
                    <h5>Caso voce tenha alguma informação para acrescentar, que não tenha sido perguntada nesse
                        questionário de saúde, por favor registrar nesse espaço</h5>
                </div>
                <div class="mt-4">
                    <div class="form-floating">
                        <textarea class="form-control w-75 h-100" id="comentarios"></textarea>
                        <label for="comentarios">Comentários?</label>
                    </div>
                </div>
            </div>
            {{-- Linha 19 --}}
            <p><br><br></p>
            <div class="conteudo-impressao">
                <div class="row">

                    <div class="mt-4">
                        <div class="row">
                            <div class="col-6">
                                <!-- Primeira coluna -->
                                <div class="box">
                                    <div class="form-group">
                                        <label>Data do preenchimento:</label> <br>
                                        ____/_____/_____
                                    </div>
                                </div>

                                <div class="box">
                                    <div class="form-group">
                                        <label>Assinatura do aluno:</label><br>
                                        ____________________________

                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <!-- Segunda coluna -->
                                <div class="box">
                                    <div class="form-group">
                                        <label>Data do recebimento:</label> <br>
                                        ____/_____/_____
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="form-group">
                                        <label>Assinatura do instrutor:</label><br>
                                        ____________________________
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="botoes">
                <div class="row">
                    <div class="col-9" style="width: 820px"></div>
                    <div class="col-1">
                        <div class="flex-row d-flex align-items-end justify-content-end mt-4">
                            <button type="button" class="btn btn-primary" onclick="imprimir()">Imprimir</button>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="flex-row d-flex align-items-end justify-content-end mt-4">
                            <button class="btn btn-success mx-2" type="submit" id="submitButton">
                                Cadastrar
                            </button>
                        </div>
                    </div>
                </div>
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
       function validarCampos() {
    const campos = [
        {
            campo: document.getElementById('imageContainer'),
            nome: "Imagem"
        },
        {
                    campo: inputNome,
                    nome: "Nome Completo"
                },
                {
                    campo: inputData,
                    nome: "Data de Nascimento"
                },
                {
                    campo: inputCpf,
                    nome: "CPF"
                },
                {
                    campo: inputSexo,
                    nome: "Sexo"
                },
                {
                    campo: inputPeso,
                    nome: "Peso"
                },
                {
                    campo: inputAltura,
                    nome: "Altura"
                },
                {
                    campo: inputTelefone,
                    nome: "Telefone"
                },
                {
                    campo: inputEmail,
                    nome: "E-mail"
                },
                {
                    campo: inputSenha,
                    nome: "Senha"
                },
                {
                    campo: inputConfirmarSenha,
                    nome: "Confirmar Senha"
                },
                {
                    campo: inputEndereco,
                    nome: "Endereço"
                },
                {
                    campo: inputNumero,
                    nome: "Número"
                },
                {
                    campo: inputEstado,
                    nome: "Estado"
                },
                {
                    campo: inputCidade,
                    nome: "Cidade"
                },
                {
                    campo: inputCep,
                    nome: "CEP"
                },
                {
                    campo: inputInstrutor,
                    nome: "Instrutor"
                },
                {
                    campo: inputTurno,
                    nome: "Turno"
                }
                ,
                {
                    campo: inputDataExame,
                    nome: "Data do ultimo exame medico"

                }

    ];

    for (const { campo, nome } of campos) {
        if (campo === document.getElementById('imageContainer')) {
            if (!campo.classList.contains('border-green')) {
                exibirMensagemDeErro(`Por favor, carregue a foto.`);
                return false;
            }
        } else {
            if (!campo.style.borderColor || campo.style.borderColor !== "green") {
                exibirMensagemDeErro(`Por favor, preencha adequadamente o campo "${nome}".`);
                return false;
            }
        }
    }

    if (!validarRadio()) {
        exibirMensagemDeErro(`Por favor, preencha a pergunta Horas de trabalho semanais.`);
        return false;
    }
    if (!validarSintomas()) {
        return false;
    }
    if(!verificainputsRadio()){
        return false;
    }
    return true;
}

function exibirMensagemDeErro(mensagem) {
    document.getElementById('modalErrorMessage').textContent = mensagem;
    $('#myModal').modal('show');
}
    </script>
    <script src="{{ asset('js/aluno.js') }}"></script>
    {{-- <script src="{{ asset('js/validacao.js') }}"></script> --}}
@endsection
