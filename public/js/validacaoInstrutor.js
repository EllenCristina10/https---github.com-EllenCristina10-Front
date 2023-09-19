
const form = document.querySelector("#form");
const nameInput = document.querySelector("#inputNome");
const emailInput = document.querySelector("#inputEmail");
// const passwordInput = document.querySelector("#inputSenha");
const passwordInput = document.getElementById("inputSenha");
// const confirmInput = document.querySelector("#inputConfirmarSenha");
const confirmInput = document.getElementById("inputConfirmarSenha");
const phoneInput = document.querySelector("#inputTelefone");
const cpfInput = document.querySelector("#inputCPF");


const formStyle = document.getElementById("form").style;
const nameStyle = document.getElementById("inputNome").style;
const emailStyle = document.getElementById("inputEmail").style;
const passwordStyle = document.getElementById("inputSenha").style;
const confirmStyle = document.getElementById("inputConfirmarSenha").style;
const phoneStyle = document.getElementById("inputTelefone").style;
const cpfStyle = document.getElementById("inputCPF").style;

const inputs = document.querySelectorAll("input");
console.log(inputs);

// Outros jeitos de se testar
// let results = str.match(regex);
// let results = regex.test(str);
// let results = regex.exec(str);

//validando Nome
function validarNome(){
    let nameRegex = /^(?!\s)[a-zA-Z\sàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,20}$/g;
    let resultsName = nameRegex.test(nameInput.value);

    let msg = document.getElementById("name-error");

    if(nameInput.value === ""){
        msg.style.display = "block";
        msg.innerHTML = "Campo obrigatório*";
        nameStyle.borderColor = "red";
        return false;
    }else if(resultsName === false){
        msg.style.display = "block";
        msg.innerHTML = "Tem certeza que esse é seu nome?!";
        nameStyle.borderColor = "red";
        return false;
    }else{
        msg.style.display = "none";
        msg.innerHTML = "";
        nameStyle.borderColor = "green";
        return true; 
    };
};

//validando Email
function validarEmail(){

    let emailRegex = /^(?!\.)([a-z0-9\.\-\_]{2,20})@([a-z0-9]{1,61})\.([a-z0-9\-\_]{2,61})([a-z0-9\-\.\_]{1,61})?(?<=[a-z]$)$/gi;
    let resultsEmail = emailRegex.test(emailInput.value);

    let msg = document.getElementById("email-error");

    if(emailInput.value == ""){
        msg.style.display = "block";
        msg.innerHTML = "E-mail é obrigatório*";
        emailStyle.borderColor = "red";
        return false;
    };
    if(resultsEmail === false){
        msg.style.display = "block";
        msg.innerHTML = "E-mail é inválido!*";
        emailStyle.borderColor = "red";
        return false;
    }else{
        msg.style.display = "none";
        msg.innerHTML = "";
        emailStyle.borderColor = "green";
        return true;
    };

};

//Validando Senha
function validarSenha(){
    let passwordRegex = /^(?=.*[a-z]+)(?=.*[A-Z]+)(?=.*\d+)(?=.*[@$!%*?&]+)[A-Za-z\d@$!%*?&]{8,16}$/g;
    let resultsPassword = passwordRegex.test(passwordInput.value);

    let msg = document.getElementById("password-error");

    if(passwordInput.value == ""){
        msg.style.display = "block";
        msg.innerHTML = "Campo obrigatório*";
        passwordStyle.borderColor = "red";
        return false;
    }else if(resultsPassword === false){
        msg.style.display = "block";
        msg.innerHTML = "Senha é inválida!*";
        passwordStyle.borderColor = "red";
        return false;
    }else{
        msg.style.display = "none";
        msg.innerHTML = "";
        passwordStyle.borderColor = "green";
        return true;
    };
};

//confirmando Senha
function confirmPassword(){

    let msg = document.getElementById("confirm-error");

    if(passwordInput.value == ""){
        msg.style.display = "block";
        msg.innerHTML = "Digite a senha novamente!";
        confirmStyle.borderColor = "red";
        return false;
    }else if(passwordInput.value !== confirmInput.value){
        msg.style.display = "block";
        msg.innerHTML = "Senhas não conferem!";
        confirmStyle.borderColor = "red";
        return false;
    }else{
        msg.style.display = "none";
        msg.innerHTML = "";
        confirmStyle.borderColor = "green";
        return true;
    };
};

//validando Telefone
function validarTelefone(){
    let phoneRegex = /^\s*(\d{2}|\d{0})[-. ]?(\d{5}|\d{4})[-. ]?(\d{4})[-. ]?\s*$/g;
    let resultsPhone = phoneRegex.test(phoneInput.value);

    let msg = document.getElementById("phone-error");

    if(phoneInput.value == ""){
        msg.style.display = "block";
        msg.innerHTML = "Campo obrigatório*";
        phoneStyle.borderColor = "red";
        return false;
    }else if(resultsPhone === false){
        msg.style.display = "block";
        msg.innerHTML = "Telefone é inválido!*";
        phoneStyle.borderColor = "red";
        return false;
    }else{
        //msg.style.display = "none";
        msg.innerHTML = "";
        phoneStyle.borderColor = "green";
        return true;
    };
};

//validando CPF
function validarCpf(){
    let cpfRegex = /^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/;
    let resultsCpf = cpfRegex.test(cpfInput.value);

    let msg = document.getElementById("cpf-error");

    if(cpfInput.value === ""){
        msg.style.display = "block";
        msg.innerHTML = "Campo obrigatório*";
        nameStyle.borderColor = "red";
        return false;
    }else if(resultsCpf === false){
        msg.style.display = "block";
        msg.innerHTML = "Tem certeza que esse é seu CPF?!";
        nameStyle.borderColor = "red";
        return false;
    }else{
        msg.style.display = "none";
        msg.innerHTML = "";
        nameStyle.borderColor = "green";
        return true; 
    };
};

//eventos
inputs[0].addEventListener("input", (event) =>{
    validarNome();
});
inputs[1].addEventListener("input", (event) =>{
    validarEmail();
});
inputs[2].addEventListener("input", (event) =>{
    validarSenha();
});
inputs[3].addEventListener("input", (event) =>{
    confirmPassword();
});
inputs[4].addEventListener("input", (event) =>{
    validarTelefone();
});
inputs[5].addEventListener("input", (event) =>{
    validarCpf();
});


form.addEventListener("submit", (event) => {
    event.preventDefault();

    if (validarNome() && validarEmail() && validarSenha() &&
        confirmPassword() && validarTelefone() && validarCpf()) {
        form.submit();
    };
});