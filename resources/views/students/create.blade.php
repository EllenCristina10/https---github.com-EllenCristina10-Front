@extends('layout')
@section('title', 'Cadastro Aluno')
@section('conteudo')

<div class="container">
    {{-- Definindo as linhas --}}
    <form class="row" id="form" >
        {{--Linha 1--}}
        <h1>Dados Pessoais</h1>
        <div class="row d-flex justify-content-between mt-4">
            {{--Nome completo--}}
            <div class="col-sm-5 " >
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person secondary-color" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                        </svg>
                    </div>
                    <input type="text" class="form-control" id="inputNome" placeholder="Nome Completo" required>

                    <div class="invalid-feedback">
                        Informe o nome!
                    </div>
                </div>
                <span id="error"></span>
            </div>
            {{--CPF--}}
            <div class="col-sm-2"  style="width: 210px">
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-window secondary-color" viewBox="0 0 16 16">
                            <path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                            <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm13 2v2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM2 14a1 1 0 0 1-1-1V6h14v7a1 1 0 0 1-1 1H2z"/>
                        </svg>
                    </div>
                    <input type="text" class="form-control" id="cpfInput" placeholder="CPF" required>
                    <div class="invalid-feedback">
                        Informe o CPF!
                    </div>
                </div>
                <span id="error"></span>
            </div>
            {{--Sexo--}}
             <div class="col-sm-2" style="width: 210px">
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-ambiguous secondary-color" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.5 1a.5.5 0 0 1 0-1h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-3.45 3.45A4 4 0 0 1 8.5 10.97V13H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V14H6a.5.5 0 0 1 0-1h1.5v-2.03a4 4 0 1 1 3.471-6.648L14.293 1H11.5zm-.997 4.346a3 3 0 1 0-5.006 3.309 3 3 0 0 0 5.006-3.31z" />
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
             </div>   
            {{--Data de nascimento--}}
            <div class="col-sm-2" style="width: 180px">
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-date secondary-color" viewBox="0 0 16 16">
                            <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z" />
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg>
                    </div>
                    <input type="text" class="form-control" id="inputData" placeholder="__/__/____" required>
                    <div class="invalid-feedback">
                        Informe a data de nascimento!
                    </div>
                </div>
            </div>
        </div>
        {{--Linha 2--}}
        <div class="row d-flex justify-content-between mt-4">
             {{--Telefone--}}
            <div class="col-sm-3" style="width: 225px">
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone secondary-color" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                    </div>
                    <input type="text" class="form-control" id="inputTelefone" placeholder="Telefone" required>
                    <div class="invalid-feedback">
                        Informe o telefone!
                    </div>
                </div>
                <span id="error"></span>
            </div>
            {{--Email--}}
            <div class="col-sm-4">
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope secondary-color" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                    </div>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                    <div class="invalid-feedback">
                        Informe o email!
                    </div>
                </div>
                <span id="error"></span>
            </div>
          <!-- Senha -->
<div class="col-sm-3" style="width: 255px">
    <div class="input-group">
        <div class="input-group-text background-icon-color">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key secondary-color" viewBox="0 0 16 16">
                <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
            </svg>
        </div>
        <input type="password" class="form-control border-right-0" id="inputSenha" placeholder="Senha" required onblur="validarSenhas(this.value)">
        <div class="invalid-feedback">
            Informe a senha!
        </div>
        <span class="input-group-text" onclick="togglePassword('inputSenha')" style="cursor: pointer; border-left: none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye secondary-color" viewBox="0 0 16 16">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
            </svg>
        </span>
    </div>
    <span id="error"></span>
</div>

<!-- Confirmação de senha -->
<div class="col-sm-3" style="width: 255px">
    <div class="input-group">
        <div class="input-group-text background-icon-color">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key secondary-color" viewBox="0 0 16 16">
                <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
            </svg>
        </div>
        <input type="password" class="form-control border-right-0" id="inputConfirmarSenha" placeholder="Confirmar senha" required onblur="validarSenhas(this.value)">
        <div class="invalid-feedback">
            Confirme a senha!
        </div>
        <span class="input-group-text" onclick="togglePassword('inputConfirmarSenha')" style="cursor: pointer; border-left: none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye secondary-color" viewBox="0 0 16 16">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
            </svg>
        </span>
    </div>
    <span id="error"></span>
</div>

        {{--Linha 3--}}
       <div class="row" style="justify-content: space-between; margin-top: 36px;">
            {{--Endereço--}}
            <div class="col-sm-4">
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map secondary-color" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
                        </svg>
                    </div>
                    <input type="text" class="form-control" id="inputEndereco" placeholder="Endereço" required>
                    <div class="invalid-feedback">
                        Informe o endereço!
                    </div>
                </div>
            </div>
            {{--Cidade--}}
            <div class="col-sm-3">
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-houses secondary-color" viewBox="0 0 16 16">
                            <path d="M5.793 1a1 1 0 0 1 1.414 0l.647.646a.5.5 0 1 1-.708.708L6.5 1.707 2 6.207V12.5a.5.5 0 0 0 .5.5.5.5 0 0 1 0 1A1.5 1.5 0 0 1 1 12.5V7.207l-.146.147a.5.5 0 0 1-.708-.708L5.793 1Zm3 1a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Zm.707.707L5 7.207V13.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5V7.207l-4.5-4.5Z" />
                        </svg>
                    </div>
                    <input type="text" class="form-control" id="inputCidade" placeholder="Cidade" required>
                    <div class="invalid-feedback">
                        Informe a cidade!
                    </div>
                </div>
            </div>
            {{--Estado--}}
            <div class="col-sm-3" style="min-width: 200px">
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt secondary-color" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                    </div>
                    <select class="form-select" id="inputEstado" required>
                        <option selected disabled value="" >Estado</option>
                        <option>Acre</option>
                        <option>Alagoas</option>
                        <option>Amapá</option>
                        <option>Amazonas</option>
                        <option>Bahia</option>
                        <option>Ceará</option>
                        <option>Distrito Federal</option>
                        <option>Espirito Santo</option>
                        <option>Goiás</option>
                        <option>Maranhão </option>
                        <option>Mato Grosso</option>
                        <option>Mato Grosso do Sul</option>
                        <option>Minas Gerais</option>
                        <option>Pará </option>
                        <option>Paraíba </option>
                        <option>Paraná </option>
                        <option>Pernambuco </option>
                        <option>Piauí </option>
                        <option>Rio de Janeiro </option>
                        <option>Rio Grande do Norte</option>
                        <option>Rio Grande do Sul</option>
                        <option>Rondônia </option>
                        <option>Roraima </option>
                        <option>Santa Catarina</option>
                        <option>São Paulo</option>
                        <option>Sergipe</option>
                        <option>Tocantins </option>

                    </select>
                    <div class="invalid-feedback">
                        Informe o Estado!
                    </div>
                </div>
            </div>
            {{--CEP--}}
            <div class="col-sm-2">
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck secondary-color" viewBox="0 0 16 16">
                            <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                    </div>
                    <input type="text" class="form-control" id="inputCep" placeholder="CEP" required>
                    <div class="invalid-feedback">
                        Informe o CEP!
                    </div>
                </div>
                <span id="error"></span>
            </div>
        </div>
        {{--Linha 4--}}
        <div class="row d-flex justify-content-start-between mt-4">
            {{--Instrutor--}}
            <div class="col-sm-5">
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person secondary-color" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                        </svg>
                    </div>
                    <select id="inputInstrutor" class="form-select" required> 
                        <option selected disabled value=""> Instrutor...</option>
                        <option>Ricardo</option>
                        <option>Alan Jefferson</option>
                        <option>Fernanda</option>
                        <option>Juliana Bonde</option>
                    </select>
                    <div class="invalid-feedback">
                        Informe o Instrutor!
                    </div>
                </div>
            </div>
            {{--Turno--}}
            <div class="col-sm-3">
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock secondary-color" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                          </svg>
                    </div>
                    <select id="inputTurno" class="form-select" required> 
                        <option selected disabled value=""> Turno...</option>
                        <option>Matutino</option>
                        <option>Vespertino</option>
                        <option>Noturno</option>
                    </select>
                    <div class="invalid-feedback">
                        Informe o Turno!
                    </div>
                </div>
            </div> 
        </div>
        {{--Linha 5--}}
        {{--Foto--}}
        <div class="row d-flex justify-content-between mt-4">
            <div class="col-sm-5">
                <label for="Image">Insira a foto do Aluno</label>
                <div class="input-group">
                    <div class="input-group-text background-icon-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera secondary-color" viewBox="0 0 16 16">
                            <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                            <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                          </svg>
                    </div>
                    <input class="form-control" type="file" id="formFile" title="Carregar o vídeo">
                    <div class="invalid-feedback">
                        Insira a foto!
                    </div>
                </div>
            </div>
        </div>
        {{--Linha 6--}}
        <h1 style="margin-top: 36px;">Anamnese</h1>
        {{--<div class="row" style="justify-content: space-between; margin-top: 36px;">--}}
        <div class="container mt-4">
            <h2>1.Atividades da vida diária</h2>
        </div>
        {{--Horas trabalhadas--}}
        <div class="container mt-4">
            <h3>Número de horas trabalhadas por semana:</h3>
        </div>
        <div class="row mt-4">
            <div class="col-4">
                <div class="form-check"> 
                    <input class="form-check-input" type="radio" name="tosseComSangue" value="sempre" id="sempre">
                    <label class="form-check-label" for="sempre">
                        Menos de 20
                    </label>
                </div>
            </div>
            <div class="col-8">
                <div class="form-check"> 
                    <input class="form-check-input" type="radio" name="tosseComSangue" value="algumasVezes" id="algumasVezes">
                    <label class="form-check-label" for="algumasVezes">
                        41 a 60
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tosseComSangue" value="nunca" id="nunca">
                    <label class="form-check-label" for="nunca">
                        20 a 40
                    </label>
                </div>
            </div>
            <div class="col-8">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tosseComSangue" value="nunca" id="nunca">
                    <label class="form-check-label" for="nunca">
                        Mais de  60
                    </label>
                </div>
            </div>
        </div>
        {{--Atividades desempenhadas--}}
        <p><br><hr><br></p>
        <div class="container mt-4">
            <h3>Atividades desempenhadas no trabalho: </h3>
        </div>
        <div class="row mt-4">
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Sentar na cadeira
                    </label>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Levantar ou carregar peso
                    </label>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Ficar de pé
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Caminhar
                    </label>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Dirigir
                    </label>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="checkOutrosTrabalho">
                    <label class="form-check-label" for="flexCheckChecked">
                        Outros
                    </label>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <div class="form-floating" style="display: none;" id="textOutrosTrabalho">
                <textarea class="form-control w-75 h-100" > </textarea>
                <label for="textOutrosTrabalho">Descrição:</label>
            </div>
        </div>    
        <div class="invalid-feedback">
            Informe as atividades!
        </div> 
                    
        {{--Linha 7--}}
        <p><br><hr><br></p>
        <div class="container mt-4">
            <h2>2.Historico Médico</h2>
            Data do último exame físico e/ou médico:
        </div>
        {{--Último exame--}}
        
        <div class="col-sm-3 mt-4" style="width: 225px">
            <div class="input-group">
               
                <div class="input-group-text background-icon-color">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-date secondary-color" viewBox="0 0 16 16">
                        <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z" />
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg>
                </div>
                <input type="date" class="form-control" id="inputDataExame" required>
                <div class="invalid-feedback">
                    Informe a data do último exame!
                </div>
            </div>
            <span id="error"></span>
        </div>
        {{--Cardiopatia--}}
        <p><br><hr><br></p>
        <div class="container mt-4">
            <h3>Marque aquele(s) que tenha(m) tido alguma cardiopatia antes dos 50 anos: </h3>
        </div>
        <div class="row mt-4">
            <div class="col-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Pai
                    </label>
                </div>
            </div>
            <div class="col-8">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Mãe
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Irmão(ã)
                    </label>
                </div>
            </div>
            <div class="col-8">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Avô/Avó
                    </label>  
                </div>
            </div>
        </div>
        {{--Intervenções cirúrgicas--}}
        <p><br><hr><br></p>
        <div class="container mt-4">
            <h3>Marque as intervenções cirúrgicas que você tenha feito: </h3>
        </div>
        <div class="row mt-4">
            <div class="col-sm-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Coluna
                    </label> 
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Rim
                    </label>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Coração
                    </label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Pulmão
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Articulação
                    </label>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Olhos
                    </label>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Hérnia de Disco
                    </label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="checkOutrosCirurgia" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Outra
                    </label>  
                </div>
            </div>
        </div>
        <div class="mt-4">
            <div class="form-floating" id="textOutrosCirurgia" style="display: none">
                <textarea class="form-control w-75 h-100"  id="floatingTextarea2"></textarea>
                <label for="floatingTextarea2">Descrição:</label>
            </div>
        </div>  
        
        {{--Problemas diagnosticados--}}
        <p><br><hr><br></p>
        <div class="container mt-4">
            <br>
            <h3>Marque o(s) problema(s) abaixo que tenha sido diagnosticado(a) ou tratado(a) por um médico:</h3>
        </div>
        <div class="row mt-4">
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Alcoolismo
                    </label>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Artrite
                    </label>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Diabetes
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Problemas musculares
                    </label>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Problema renal
                    </label>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Problemas oculares
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Pressão arterial alta
                    </label>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckDefault">
                        Enfisema
                    </label>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckChecked">
                        Úlcera
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        AVC
                    </label>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Anemia
                    </label>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Asma
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Anemia
                    </label>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Obesidade
                    </label> 
                </div>    
            </div>
            <div class="col-sm">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="checkOutrosDiagnosticado" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Outro
                    </label>  
                </div>
            </div>
        </div>
        <div class="mt-4">
            <div class="form-floating" id="textOutrosDiagnosticado" style="display: none">
                <textarea class="form-control w-75 h-100"  id="floatingTextarea3"></textarea>
                <label for="floatingTextarea3">Descrição:</label>
            </div>
        </div>  
        {{--Medicamentos--}}
        <p><br><hr><br></p>
        <div class="container mt-4">
            <h3>Descreva o(s) medicamento(s) utlizado(s) nos últimos tempos:</h3>
        </div>
        <div class="mt-4">
            <div class="form-floating">
                <textarea class="form-control w-75 h-100"  id="floatingTextarea2"></textarea>
                <label for="floatingTextarea2">Descrição:</label>
            </div>
        </div>  
        {{--Linha 12--}}
        <div>
            {{--Sintomas--}}
            <p><br><hr><br></p>
            <div>
                <div class="container mt-4">
                    <h3>Indique os sintomas conforme segue:</h3>
                </div>
                <div class="container mt-4">
                    <h5>A&#41; Tosse com sangue</h5>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline"> 
                            <input class="form-check-input" type="radio" name="tosseComSangue" value="sempre" id="sempre">
                            <label class="form-check-label" for="sempre">
                                Sempre
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline"> 
                            <input class="form-check-input" type="radio" name="tosseComSangue" value="algumasVezes" id="algumasVezes">
                            <label class="form-check-label" for="algumasVezes">
                                Algumas vezes
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tosseComSangue" value="nunca" id="nunca">
                            <label class="form-check-label" for="nunca">
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
                        <input class="form-check-input" type="radio" name="dorabdonminal" value="sempre" id="sempre">
                        <label class="form-check-label" for="sempre">
                            Sempre
                        </label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-check form-check-inline"> 
                        <input class="form-check-input" type="radio" name="dorabdonminal" value="algumasVezes" id="algumasVezes">
                        <label class="form-check-label" for="algumasVezes">
                            Algumas vezes
                        </label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="dorabdonminal" value="nunca" id="nunca">
                        <label class="form-check-label" for="nunca">
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
                            <input class="form-check-input" type="radio" name="dornaspernas" value="sempre" id="sempre">
                            <label class="form-check-label" for="sempre">
                                Sempre
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline"> 
                            <input class="form-check-input" type="radio" name="dornaspernas" value="algumasVezes" id="algumasVezes">
                            <label class="form-check-label" for="algumasVezes">
                                Algumas vezes
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dornaspernas" value="nunca" id="nunca">
                            <label class="form-check-label" for="nunca">
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
                            <input class="form-check-input" type="radio" name="dornosbraços" value="sempre" id="sempre">
                            <label class="form-check-label" for="sempre">
                                Sempre
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline"> 
                            <input class="form-check-input" type="radio" name="dornosbraços" value="algumasVezes" id="algumasVezes">
                            <label class="form-check-label" for="algumasVezes">
                                Algumas vezes
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dornosbraços" value="nunca" id="nunca">
                            <label class="form-check-label" for="nunca">
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
                            <input class="form-check-input" type="radio" name="dornascostasoupescoco" value="sempre" id="sempre">
                            <label class="form-check-label" for="sempre">
                                Sempre
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline"> 
                            <input class="form-check-input" type="radio" name="dornascostasoupescoco" value="algumasVezes" id="algumasVezes">
                            <label class="form-check-label" for="algumasVezes">
                                Algumas vezes
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dornascostasoupescoco" value="nunca" id="nunca">
                            <label class="form-check-label" for="nunca">
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
                            <input class="form-check-input" type="radio" name="dornopeito " value="sempre" id="sempre">
                            <label class="form-check-label" for="sempre">
                                Sempre
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline"> 
                            <input class="form-check-input" type="radio" name="dornopeito" value="algumasVezes" id="algumasVezes">
                            <label class="form-check-label" for="algumasVezes">
                                Algumas vezes
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dornopeito" value="nunca" id="nunca">
                            <label class="form-check-label" for="nunca">
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
                            <input class="form-check-input" type="radio" name="doresarticulares" value="sempre" id="sempre">
                            <label class="form-check-label" for="sempre">
                                Sempre
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline"> 
                            <input class="form-check-input" type="radio" name="doresarticulares" value="algumasVezes" id="algumasVezes">
                            <label class="form-check-label" for="algumasVezes">
                                Algumas vezes
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="doresarticulares" value="nunca" id="nunca">
                            <label class="form-check-label" for="nunca">
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
                            <input class="form-check-input" type="radio" name="Faltadearcomesforçoleve " value="sempre" id="sempre">
                            <label class="form-check-label" for="sempre">
                                Sempre
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline"> 
                            <input class="form-check-input" type="radio" name="Faltadearcomesforçoleve" value="algumasVezes" id="algumasVezes">
                            <label class="form-check-label" for="algumasVezes">
                                Algumas vezes
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Faltadearcomesforçoleve" value="nunca" id="nunca">
                            <label class="form-check-label" for="nunca">
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
                            <input class="form-check-input" type="radio" name="sentirsefraco" value="sempre" id="sempre">
                            <label class="form-check-label" for="sempre">
                                Sempre
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sentirsefraco" value="algumasVezes" id="algumasVezes">
                            <label class="form-check-label" for="algumasVezes">
                                Algumas vezes
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sentirsefraco" value="nunca" id="nunca">
                            <label class="form-check-label" for="nunca">
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
                            <input class="form-check-input" type="radio" name="tontura" value="sempre" id="sempre">
                            <label class="form-check-label" for="sempre">
                                Sempre
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline"> 
                            <input class="form-check-input" type="radio" name="tontura" value="algumasVezes" id="algumasVezes">
                            <label class="form-check-label" for="algumasVezes">
                                Algumas vezes
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tontura" value="nunca" id="nunca">
                            <label class="form-check-label" for="nunca">
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
                            <input class="form-check-input" type="radio" name="palpitação" value="sempre" id="sempre">
                            <label class="form-check-label" for="sempre">
                                Sempre
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline"> 
                            <input class="form-check-input" type="radio" name="palpitação" value="algumasVezes" id="algumasVezes">
                            <label class="form-check-label" for="algumasVezes">
                                Algumas vezes
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="palpitação" value="nunca" id="nunca">
                            <label class="form-check-label" for="nunca">
                                Nunca
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--Linha 14--}}
        {{--Alergias--}}
        <p><br><hr><br></p>
        <div class="mt-4">
            <h3>Você possui alguma alergia?</h3>
        </div>
        <div class="row mt-4">
            <div class="col-2">
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio" name="alergia" value="sim" id="checkAlergiaSim">
                    <label class="form-check-label" for="checkAlergiaSim">
                        Sim
                    </label>
                </div>
            </div>
            <div class="col-2">
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio" name="alergia" value="nao" id="checkAlergiaNao">
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
        {{--Linha 15--}}
        {{--Acidentes--}}
        <p><br><hr><br></p>
        <div class="mt-4">
            <h3>Nos últimos tempos, você sofreu algum acidente ou lesão ósteo-articular?</h3>
        </div>
        <div class="row mt-4">
            <div class="col-2">
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio" name="acidente" value="sim" id="checkAcidenteSim">
                    <label class="form-check-label" for="checkAcidenteSim">
                        Sim
                    </label>
                </div>
            </div>
            <div class="col-2">
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio" name="acidente" value="nao" id="checkAcidenteNao">
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
        {{--Linha 16--}}
        {{--Restrições--}}
        <p><br><hr><br></p>
        <div class="mt-4">
            <h3>Você possui alguma restrição à prática de atividade física?</h3>
        </div>
        <div class="row mt-4">
            <div class="col-2">
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio" name="restricao" value="sim" id="restricaoSim">
                    <label class="form-check-label" for="restricaoSim">
                        Sim
                    </label>
                </div>
            </div>
            <div class="col-2">
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio" name="restricao" value="nao" id="restricaoNao">
                    <label class="form-check-label" for="restricaoNao">
                        Não
                    </label>
                </div>
            </div>
            <div class="mt-4">
                <div class="form-floating" id="texRestricao" style="display: none">
                    <textarea class="form-control w-75 h-100"  id="floatingTextarea2"></textarea>
                    <label for="floatingTextarea2">Quais?</label>
                </div>
            </div>  
        </div>
        {{--Linha 17--}}
        {{--Fumante--}}
        <p><br><hr><br></p>
        <div class="container mt-4">
            <h2>3.Comportamento relacionado à saúde</h2>
        </div> 
        <div class="container mt-4">
            <h3>Você fuma atualmente?</h3>
        </div>  
        <div class="row mt-4">
            <div class="col-2">
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio" name="fuma" value="sim" id="fumaSim">
                    <label class="form-check-label" for="fumaSim">
                        Sim
                    </label>
                </div>
            </div>
            <div class="col-2">
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio" name="fuma" value="nao" id="fumaNao">
                    <label class="form-check-label" for="fumaNao">
                        Não
                    </label>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <div class="form-floating" id="textFuma" style="display: none">
                <textarea class="form-control w-75 h-100"  id="floatingTextarea2"></textarea>
                <label for="floatingTextarea2">Quantos cigarros por dia?</label>
            </div>
        </div>
        {{--Linha 7--}}
        {{--Experiência--}}
        <p><br><hr><br></p>   
        <div class="container mt-4">
            <h3>Atualmente, você realiza alguma atividade física?</h3>
        </div>  
        <div class="row mt-4">
            <div class="col-2">
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio" name="sedentario" value="sim" id="sedentarioSim">
                    <label class="form-check-label" for="sedentarioSim">
                        Sim
                    </label>
                </div>
            </div>
            <div class="col-2">
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio" name="sedentario" value="nao" id="sedentarioNao">
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
     
        {{--Objetivos--}}
        <p><br><hr><br></p>
        <div class="container mt-4">
            <h3>Objetivos com relação a atividade física: </h3>
        </div>
        <div class="row mt-4">
            <div class="col-sm-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Estética
                    </label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Lazer
                    </label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Terapêutico
                    </label>
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="col-sm-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Condicionamento físico
                    </label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Convívio social
                    </label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Emagrecimento
                    </label>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <div class="form-floating">
                <textarea class="form-control w-75 h-100"  id="floatingTextarea2"></textarea>
                <label for="floatingTextarea2">Outros?</label>
            </div>
        </div>  
        {{--Linha 18--}}
        <p><br><hr><br></p>
        <div class="row">
            <div class="container mt-4">
                <h2>Comentários gerais</h2>
            </div>
            <div class="container mt-4">
                <h5>Caso voce tenha alguma informação para acrescentar, que não tenha sido perguntada nesse questionário de saúde, por favor registrar nesse espaço</h5>
            </div>
            <div class="mt-4">
                <div class="form-floating">
                    <textarea class="form-control w-75 h-100"  id="floatingTextarea2"></textarea>
                    <label for="floatingTextarea2">Comentários?</label>
                </div>
            </div>  
        </div>
        {{--Linha 19--}} 
        <p><br><br></p>
        <div class="conteudo-impressao">    
                <div class="row">
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-6">
                                <!-- Primeira coluna -->
                                <div class="box">
                                    <div class="form-group">
                                        <label for="dataPreenchimento">Data do preenchimento:</label> <br>
                                        ____/_____/_____
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="form-group">
                                        <label for="assinaturaAluno">Assinatura do aluno responsável:</label><br>
                                        _________________________________
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <!-- Segunda coluna -->
                                <div class="box">
                                    <div class="form-group">
                                        <label for="dataPreenchimento">Data do recebimento:</label> <br>
                                        ____/_____/_____
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="form-group">
                                        <label for="assinaturaAluno">Assinatura do instrutor:</label><br>
                                        _________________________________
                                    </div>
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
                        <button class="btn btn-success mx-2" type="submit">
                            Cadastrar
                        </button>
                    </div>
                </div>
                
            </div>'
        </div>
    </form>
</div>
<style>
    @media print {
        body {
            font-size: 12pt; /* Tamanho da fonte para impressão */
            color: black; /* Cor do texto para impressão */
            background-color: white; /* Cor de fundo para impressão */
        }
        .box {
            border: 1px solid #000;
            border-radius: 10px;
            padding: 10px;
            margin: 5px; /* Adicione um pequeno espaço entre as caixas */
            display: inline-block;
            height: auto;
            max-width: calc(50% - 10px); /* Divida em 2 colunas e adicione um espaço de 10px */
            text-align: center; /* Centralize o conteúdo dentro das caixas */
        }
        .botoes {
            display: none;
        }
        .conteudo-impressao {
            display: block !important;
        }
    }
    
    .conteudo-impressao {
        display: none;
    }
</style>

<script>


const sedentarioSim = document.getElementById('sedentarioSim');
const sedentarioNao = document.getElementById('sedentarioNao');
const textAreasAtividade = document.getElementById('textAreasAtividade');
const textAreasFrequencia = document.getElementById('textAreasFrequencia');
const textAreasDuracao = document.getElementById('textAreasDuracao');

sedentarioSim.addEventListener('click', function() {
    if (this.checked) {
        textAreasAtividade.style.display = 'block';
        textAreasFrequencia.style.display = 'block';
        textAreasDuracao.style.display = 'block';
    }
});

sedentarioNao.addEventListener('click', function() {
    if (this.checked) {
        textAreasAtividade.style.display = 'none';
        textAreasFrequencia.style.display = 'none';
        textAreasDuracao.style.display = 'none';
    }
});


    const fumaSim = document.getElementById('fumaSim');
    const fumaNao = document.getElementById('fumaNao');
    const textfuma = document.getElementById('textfuma');

    fumaSim.addEventListener('click', function() {
        if (this.checked) {
            textFuma.style.display = 'block';
        }
    });

    fumaNao.addEventListener('click', function() {
        if (this.checked) {
            textFuma.style.display = 'none';
        }
    });




    const restricaoSim = document.getElementById('restricaoSim');
    const restricaoNao = document.getElementById('restricaoNao');
    const texRestricao = document.getElementById('texRestricao');

    restricaoSim.addEventListener('click', function() {
        if (this.checked) {
            texRestricao.style.display = 'block';
        }
    });

    restricaoNao.addEventListener('click', function() {
        if (this.checked) {
            texRestricao.style.display = 'none';
        }
    });



   const acidenteSim = document.getElementById('checkAcidenteSim');
    const acidenteNao = document.getElementById('checkAcidenteNao');
    const textOutrosAcidente = document.getElementById('textOutrosAcidente');

    acidenteSim.addEventListener('click', function() {
        if (this.checked) {
            textOutrosAcidente.style.display = 'block';
        }
    });

    acidenteNao.addEventListener('click', function() {
        if (this.checked) {
            textOutrosAcidente.style.display = 'none';
        }
    });





    const checkAlergiaSim = document.getElementById('checkAlergiaSim');
    const checkAlergiaNao = document.getElementById('checkAlergiaNao');
    const textOutrosAlergia = document.getElementById('textOutrosAlergia');

    checkAlergiaSim.addEventListener('click', function() {
        if (this.checked) {
            textOutrosAlergia.style.display = 'block';
        }
    });

    checkAlergiaNao.addEventListener('click', function() {
        if (this.checked) {
            textOutrosAlergia.style.display = 'none';
        }
    });


    const checkOutrosDiagnosticado = document.getElementById('checkOutrosDiagnosticado');
    const textOutrosDiagnosticado = document.getElementById('textOutrosDiagnosticado');

checkOutrosDiagnosticado.addEventListener('change', function(event) {
    if (checkOutrosDiagnosticado.checked) {
        textOutrosDiagnosticado.style.display = 'block';
    } else {
        textOutrosDiagnosticado.style.display = 'none';
    }
});

    const checkboxOutrosTrabalho = document.getElementById('checkOutrosTrabalho');
    const campoTextoOutrosTrabalho = document.getElementById('textOutrosTrabalho');

    checkboxOutrosTrabalho.addEventListener('change', function() {
        if (this.checked) {
            campoTextoOutrosTrabalho.style.display = 'block';
        } else {
            campoTextoOutrosTrabalho.style.display = 'none';
        }
    });

    
    const checkboxOutrosCirurgia = document.getElementById('checkOutrosCirurgia');
    const campoTextoOutrosCirurgia = document.getElementById('textOutrosCirurgia');
    
    checkboxOutrosCirurgia.addEventListener('change', function() { 
        if (this.checked) {      
            campoTextoOutrosCirurgia.style.display = 'block';
        } else {
            campoTextoOutrosCirurgia.style.display = 'none';
        }
    });



    function togglePassword(inputId, eyeIcon) {
        const inputElement = document.getElementById(inputId);
        if (inputElement.type === "password") {
            inputElement.type = "text";
            eyeIcon.innerHTML = '<i class="bi bi-eye-slash"></i>'; 
        } else {
            inputElement.type = "password";
            eyeIcon.innerHTML = '<i class="bi bi-eye"></i>'; 
        }
    }


    // Função para criar uma versão separada do conteúdo para impressão
    function criarConteudoParaImpressao() {
        // Clona o elemento body, removendo o navbar e o footer
        var conteudoParaImpressao = document.body.cloneNode(true);
        
        // Remove o navbar e o footer da cópia
        var elementosParaRemover = conteudoParaImpressao.querySelectorAll("nav, footer");
        elementosParaRemover.forEach(function(elemento) {
            elemento.parentNode.removeChild(elemento);
        });

        // Adicione a classe .conteudo-impressao
        var elementosParaAdicionarClasse = conteudoParaImpressao.querySelectorAll(".conteudo-impressao");
        elementosParaAdicionarClasse.forEach(function(elemento) {
            elemento.style.display = "block";
        });

        return conteudoParaImpressao;
    }

    // Função para imprimir o conteúdo
    function imprimir() {
        // Inclui temporariamente o link para o CSS externo do Bootstrap
        var link = document.createElement("link");
        link.rel = "stylesheet";
        link.type = "text/css";
        link.href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"; // Substitua pela URL correta
        document.head.appendChild(link);

        // Crie um estilo interno para adicionar ao documento de impressão
        var estiloInterno = document.createElement("style");
        estiloInterno.type = "text/css";
        estiloInterno.innerHTML = `
            /* Seu CSS interno aqui */
            body {
                background-color: lightgray;
            }
            /* Adicione outras regras CSS internas conforme necessário */
        `;
        document.head.appendChild(estiloInterno);

        var conteudoParaImpressao = criarConteudoParaImpressao();
        
        // Abre uma nova janela para impressão
        var win = window.open("about:blank");
        win.document.open();
        win.document.write("<html><head><title>Impressão</title></head><body>");
        win.document.write(conteudoParaImpressao.innerHTML);

        win.document.write("</body></html>");
        win.document.close();

        // Remove o link do CSS externo e o estilo interno após a impressão
        link.parentNode.removeChild(link);
        estiloInterno.parentNode.removeChild(estiloInterno);

        win.print();
        win.close();
    }
</script>

@endsection