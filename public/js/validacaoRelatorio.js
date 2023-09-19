const form = document.querySelector("#form");
const nameInput = document.querySelector("#inputNome");


const formStyle = document.getElementById("form").style;
const nameStyle = document.getElementById("inputNome").style;

const inputs = document.querySelectorAll("input");
console.log(inputs);


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


//eventos
inputs[0].addEventListener("input", (event) =>{
    validarNome();
});


form.addEventListener("submit", (event) => {
    event.preventDefault();

    if (validarNome() ) {
        form.submit();
    };
});