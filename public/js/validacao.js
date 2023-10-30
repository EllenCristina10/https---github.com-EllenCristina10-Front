const Mask = {
    apply(input, func) {
        setTimeout(function () {
            input.value = Mask[func](input.value);
        }, 1);
    },
    formatBRL(value) {
        value = value.replace(/\D/g, "");

        return new Intl.NumberFormat('pt-BR', {
            style: 'currency',
            currency: 'BRL'
        }).format(value / 100);
    },
    cpf(value) {
        let msg = document.getElementById("errorCpf");
        value = value.replace(/\D/g, "");

        //11122233344
        value = value.replace(/(\d{3})(\d)/, "$1.$2");

        //111.22233344
        value = value.replace(/(\d{3})(\d)/, "$1.$2");

        //111.222.33344
        value = value.replace(/(\d{3})(\d)/, "$1-$2");

        //111.222.333-44

        if (value.length > 14) {
            value = value.slice(0, -1);
        }
        if(value.length < 14){
            msg.style.display = "block";
            msg.innerHTML = "Número de Cpf incompleto";
            inputCpf.style.borderColor = "red";
        }
        else{ 
            msg.style.display = "none";
            msg.innerHTML = "";
            inputCpf.style.borderColor = "green";
        }
        return value;
    },
    peso(value){

        let msg = document.getElementById("errorPeso");
    value = value.replace(/[^0-9.]/g, '');


    if (value.length > 6) {
        value = value.slice(0, 6);
    }

    const peso = parseFloat(value);

    if (!isNaN(peso) && peso <= 500.00) {
        msg.style.display = "block";
        msg.innerHTML = "";
        inputPeso.style.borderColor = "green";
        return value;
    } else {
        msg.style.display = "block";
        msg.innerHTML = "O limite de Peso é de 500 kgs";
        inputPeso.style.borderColor = "red";
        return '';
    }
},
    telefone(value) {
        value = value.replace(/\D/g, "");
        let msg = document.getElementById("errorTelefone");

        if (value.length > 11) {
            value = value.slice(0, 11);
        }

        let formattedValue = "";

        if (value.length > 0) {
            formattedValue += `(${value.slice(0, 2)}`;
        }

        if (value.length > 2) {
            formattedValue += `) ${value.slice(2, 3)}`;
        }

        if (value.length > 3) {
            formattedValue += ` ${value.slice(3, 7)}`;
        }

        if (value.length > 7) {
            formattedValue += `-${value.slice(7, 11)}`;
        }
        if(value.length < 11){
            msg.style.display = "block";
            msg.innerHTML = "Número de telefone Incompleto";
            inputTelefone.style.borderColor = "red";
        }
        else{ 
            msg.style.display = "none";
            msg.innerHTML = "";
            inputTelefone.style.borderColor = "green";
        }
        return formattedValue;
    },data(value) {
        let msg = document.getElementById("errorData");
        let currentDate = new Date();
        let minDate = new Date(currentDate);
        minDate.setFullYear(minDate.getFullYear() - 10);
        let inputDate = new Date(value);
    
        if (!value) {
            // O campo está vazio
            msg.style.display = "none";
            msg.innerHTML = "";
            inputData.style.borderColor = "";
        } else if (inputDate < new Date("1900-01-01")) {
            // A data é menor que "01/01/01"
            msg.style.display = "block";
            msg.innerHTML = "Aluno muito idoso";
            inputData.style.borderColor = "red";
        } else if (inputDate > currentDate) {
            // A data é maior que a data atual
            msg.style.display = "block";
            msg.innerHTML = "Data invalida, valor muito alto";
            inputData.style.borderColor = "red";
        }else if (inputDate > minDate) {
            // A data é maior que 10 anos atrás a partir da data atual
            msg.style.display = "block";
            msg.innerHTML = "Data invalida, aluno muito novo";
            inputData.style.borderColor = "red";
        } else {
            // A data está dentro do intervalo desejado
            msg.style.display = "none";
            msg.innerHTML = "";
            inputData.style.borderColor = "green";
        }
    
        return value;
    },numero(value){
        let msg = document.getElementById("errorNumero");
        value = value.replace(/\D/g, "");
        if (value.length > 5) {
            value = value.slice(0, -1);
            msg.style.display = "block";
            msg.innerHTML = "Número muito alto";
            inputNumero.style.borderColor = "red";
            return "";
        } else{
            msg.style.display = "none";
            msg.innerHTML = "";
            inputNumero.style.borderColor = "green";
        }
        return value;
    },
    cep(value) {
        let msg = document.getElementById("errorCep");
        value = value.replace(/\D/g, "");

        if (value.length > 8) {
            value = value.slice(0, -1);
        }
        
        value = value.replace(/(\d{5})(\d)/, "$1-$2");
        if(value.length < 8){
            msg.style.display = "block";
            msg.innerHTML = "Cep Incompleto";
            inputCep.style.borderColor = "red";
        }
        else{ 
            msg.style.display = "none";
            msg.innerHTML = "";
            inputCep.style.borderColor = "green";
        }
        return value;
    },
    altura(value) {
        let msg = document.getElementById("errorAltura");
        value = value.replace(/\D/g, "");

        if (value.length > 3) {
            value = value.slice(0, 6);
        }
        
        const altura = value;

        if (!isNaN(altura) && altura <= 400) {
            msg.style.display = "none";
            msg.innerHTML = "";
            inputAltura.style.borderColor = "green";
            return value;
        } else {
            msg.style.display = "block";
            msg.innerHTML = "O limite de altura é de 400 cm";
            inputAltura.style.borderColor = "red";
            return '';
        }
    },
    sexo(value){
        let msg = document.getElementById("errorSexo");

        if (value!="...") {
            msg.style.display = "none";
            msg.innerHTML = "";
            inputSexo.style.borderColor = "green";
            return value;
        } 
    },
    email(value){
        let msg = document.getElementById("errorEmail") 

        if(value.includes("@") && value.includes(".")){
            msg.style.display = "none";
            msg.innerHTML = "";
            inputEmail.style.borderColor = "green";
        }else{
            msg.style.display = "none";
            msg.innerHTML = "Email invalido";
            inputEmail.style.borderColor = "red";
        }
        return value;
    },
    uf(value){
        let msg = document.getElementById("errorEstado");

        if (value!="") {
            msg.style.display = "none";
            msg.innerHTML = "";
            inputEstado.style.borderColor = "green";
            inputCidade.style.borderColor = "green";
            return value;
        } 
    }
}

const PhotosUpload = {
    input: "",
    preview: document.querySelector('#photos-preview'),
    uploadLimit: 6,
    files: [],
    handleFileInput(event) {
        const { files: fileList } = event.target;
        PhotosUpload.input = event.target;

        if (PhotosUpload.hasLimit(event)) return;

        Array.from(fileList).forEach(file => {

            PhotosUpload.files.push(file);

            const reader = new FileReader();

            reader.onload = () => {
                const image = new Image();
                image.src = String(reader.result);

                const div = PhotosUpload.getContainer(image);
                PhotosUpload.preview.appendChild(div);
            }

            reader.readAsDataURL(file);
        })

        PhotosUpload.input.files = PhotosUpload.getAllFiles();
    },
    hasLimit(event) {
        const { uploadLimit, input, preview } = PhotosUpload;
        const { files: fileList } = input;
        if (fileList.length > uploadLimit) {
            alert(`Envie no máximo ${uploadLimit} fotos!`);

            event.preventDefault();
            return true;
        }

        const photosDiv = [];
        preview.childNodes.forEach(item => {
            if (item.classList && item.classList.value == "photo") {
                photosDiv.push(item);
            }
        })

        const totalPhotos = fileList.length + photosDiv.length;

        if (totalPhotos > uploadLimit) {
            alert("Você atingiu o limite máximo de upload de fotos");

            event.preventDefault();
            return true;
        }

        return false;
    },
    getAllFiles() {
        const dataTransfer = new ClipboardEvent("").clipboardData || new DataTransfer();

        PhotosUpload.files.forEach(file => dataTransfer.items.add(file));

        return dataTransfer.files;
    },
    getContainer(image) {
        const div = document.createElement('div');
        const button = PhotosUpload.getRemoveButton();

        div.classList.add('photo');

        div.onclick = PhotosUpload.removePhoto;

        div.appendChild(image);
        div.appendChild(button);

        return div;
    },
    getRemoveButton() {
        const button = document.createElement('i');

        button.classList.add('material-icons');
        button.innerHTML = 'close';

        return button;
    },
    removePhoto(event) {
        const photoDiv = event.target.parentNode;
        const photosArray = Array.from(PhotosUpload.preview.children);
        const index = photosArray.indexOf(photoDiv);

        PhotosUpload.files.splice(index, 1);

        PhotosUpload.input.files = PhotosUpload.getAllFiles();

        photoDiv.remove();
    },
    removeOldPhoto(event) {
        const photoDiv = event.target.parentNode;

        if (photoDiv.id) {
            const removedFiles = document.querySelector('input[name="removed_files"');

            if (removedFiles) {
                removedFiles.value += `${photoDiv.id},`;
            }
        }

        photoDiv.remove();
    }
}

const ImageGallery = {
    highlight: document.querySelector('.gallery .highlight > img'),
    previews: document.querySelectorAll('.gallery-preview img'),
    setImage(e) {
        const { target } = e;
        ImageGallery.previews.forEach(preview => preview.classList.remove('active'));
        target.classList.add('active');

        ImageGallery.highlight.src = target.src;
        Lightbox.image.src = target.src;
    }
}

const Lightbox = {
    target: document.querySelector('.lightbox-target'),
    image: document.querySelector('.lightbox-target img'),
    closeButton: document.querySelector('.lightbox-target a.lightbox-close'),
    open() {
        Lightbox.target.style.opacity = 1;
        Lightbox.target.style.top = 0;
        Lightbox.target.style.bottom = 0;
        Lightbox.closeButton.style.top = 0;
    },
    close() {
        Lightbox.target.style.opacity = 0;
        Lightbox.target.style.top = "-100%";
        Lightbox.target.style.bottom = "initial";
        Lightbox.closeButton.style.top = "-80px";
    }
}

const Validate = {
    apply(input, func) {

        Validate.clearErrors(input);

        let results = Validate[func](input.value);

        input.value = results.value;

        if (results.error) {
            Validate.displayError(input, results.error);
        }

    },
    displayError(input, error) {
        const div = document.createElement('div');
        div.classList.add('error');
        div.innerHTML = error;
        input.parentNode.appendChild(div);

        input.focus();
    },
    clearErrors(input) {
        const errorDiv = input.parentNode.querySelector('.error');
        if (errorDiv) {
            errorDiv.remove();
        }
    },
    isEmail(value) {
        let error = null;

        const mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if (!value.match(mailFormat)) {
            error = "Email inválido!";
        }

        return {
            error,
            value
        };
    },
    isCpfCnpj(value) {
        value = value.replace(/\D/g, "");

        let error = null;

        if (value.length < 11) {
            error = "Informe um documento válido!";
        } 
        return {
            error,
            value
        };
    },
    isCep(value) {
        value = value.replace(/\D/g, "");

        let error = null;

        if (value.length !== 8) {
            error = "CEP Inválido!";
        }

        return {
            error,
            value
        };
    },
    
    
}
const inputCpf = document.getElementById('inputCpf');
const inputCep = document.getElementById('inputCep');
const inputTelefone = document.getElementById('inputTelefone');
const inputPeso = document.getElementById('inputPeso');
const inputAltura = document.getElementById('inputAltura');
const inputData = document.getElementById('inputData');
const inputNumero = document.getElementById('inputNumero');
const inputSexo = document.getElementById('inputSexo');
const inputEmail = document.getElementById('inputEmail');
const inputEstado = document.getElementById('inputEstado');
inputCpf.addEventListener('input', function () {
    Mask.apply(this, 'cpf');
});

inputCep.addEventListener('input', function () {
    Mask.apply(this, 'cep')
});

inputTelefone.addEventListener('input', function () {
    Mask.apply(this, 'telefone')
});

inputPeso.addEventListener('input', function () {
    Mask.apply(this, 'peso')
});
inputAltura.addEventListener('input', function () {
    Mask.apply(this, 'altura')
});
inputData.addEventListener('input', function () {
    Mask.apply(this, 'data')
});
inputNumero.addEventListener('input', function () {
    Mask.apply(this, 'numero')
});
inputSexo.addEventListener('input', function () {
    Mask.apply(this, 'sexo')
});
inputEmail.addEventListener('input', function () {
    Mask.apply(this, 'email')
});
inputEstado.addEventListener('input', function () {
    Mask.apply(this, 'uf')
});



const inputNome = document.getElementById('inputNome');


inputNome.addEventListener('input', function () {
    validarNome(this);
});

function validarNome(input) {
    const valor = input.value;
    const regex = /^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/; 
    let msg = document.getElementById("errorNome");

    
    if (!regex.test(valor)) {
        
            msg.style.display = "block";
            msg.innerHTML = "Nome inválido, apenas letras são aceitas";
            inputNome.style.borderColor = "red";
            input.value = valor.replace(/[^A-Za-zÀ-ÖØ-öø-ÿ\s]+/g, ''); 
    }else if (valor.length < 10){
        msg.style.display = "block";
            msg.innerHTML = "Nome muito pequeno";
            inputNome.style.borderColor = "red";
    }
    else{ 
        msg.style.display = "none";
        msg.innerHTML = "";
        inputNome.style.borderColor = "green";
    }
}


document.querySelector('#inputSenha').addEventListener('input', function () {
    validarSenha();
});
document.querySelector('#inputConfirmarSenha').addEventListener('input', function () {
    confirmPassword();
});
const inputConfirmarSenha = document.querySelector('#inputConfirmarSenha');
const passwordStyle = document.getElementById("inputSenha").style;
const confirmStyle = document.getElementById("inputConfirmarSenha").style;
//Validando Senha
function validarSenha() {

    let passwordRegex = /^(?=.*[a-z]+)(?=.*[A-Z]+)(?=.*\d+)(?=.*[.@$!%*?&]+)[A-Za-z\d.@$!%*?&]{8,16}$/g;
    let resultsPassword = passwordRegex.test(inputSenha.value);

    let msg = document.getElementById("errorSenha");

    if (inputSenha.value == "") {
        msg.style.display = "block";
        msg.innerHTML = "Campo obrigatório*";
        passwordStyle.borderColor = "red";
        return false;
    } else if (resultsPassword === false) {
        msg.style.display = "block";
        msg.innerHTML = "Senha inválida! <br>A senha deve conter entre 8 e 20 caracteres e deve incluir letras maiúsculas, letras minúsculas e caracteres especiais.";
        passwordStyle.borderColor = "red";
        return false;
    } else {
        msg.style.display = "none";
        msg.innerHTML = "";
        passwordStyle.borderColor = "green";
        return true;
    };
};

//confirmando Senha
function confirmPassword() {

    let msg = document.getElementById("errorConfirmarSenha");

    if (inputConfirmarSenha.value == "") {
        msg.style.display = "block";
        msg.innerHTML = "Digite a senha novamente!";
        confirmStyle.borderColor = "red";
        return false;
    } else if (inputSenha.value !== inputConfirmarSenha.value) {
        msg.style.display = "block";
        msg.innerHTML = "Senhas não conferem!";
        confirmStyle.borderColor = "red";
        return false;
    } else {
        msg.style.display = "none";
        msg.innerHTML = "";
        confirmStyle.borderColor = "green";
        return true;
    };
};






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

document.addEventListener('DOMContentLoaded', function() {
    // Adicione um manipulador de eventos ao formulário
    document.getElementById('form').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault(); // Impede o envio do formulário
        }
    });
});

document.getElementById('submitButton').addEventListener('click', function(event) {
    // Define uma variável para controlar a validação dos campos
    let camposSaoValidos = validarCampos();

    if (!camposSaoValidos) {
        alert("Campos inválidos. Por favor, corrija-os antes de enviar o formulário.");
    }

    // Impede o envio do formulário se os campos não forem válidos
    if (!camposSaoValidos) {
        event.preventDefault();
    }
});

function validarCampos() {
    const campos = [
        inputCpf,
        inputCep,
        inputTelefone,
        inputPeso,
        inputAltura,
        inputData,
        inputNumero,
        inputNome,
        inputSenha,
        inputConfirmarSenha,
        inputSexo,
        inputEmail,
        inputEstado,
        inputCidade
    ];

    for (const campo of campos) {
        if (!campo.style.borderColor || campo.style.borderColor !== "green") {
            alert("Preencha todos os campos corretamente antes de enviar o formulário.");
            return false;
        }
    }

    return true; // Todos os campos são válidos, pode enviar o formulário
}