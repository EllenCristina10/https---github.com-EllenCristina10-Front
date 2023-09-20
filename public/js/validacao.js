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
    cpf(value){
        value = value.replace(/\D/g, "");

            //11122233344
            value = value.replace(/(\d{3})(\d)/, "$1.$2");

            //111.22233344
            value = value.replace(/(\d{3})(\d)/, "$1.$2");

            //111.222.33344
            value = value.replace(/(\d{3})(\d)/, "$1-$2");

            //111.222.333-44

            if(value.length > 14){
                value = value.slice(0, -1);
            }
        
        return value;
    },
    telefone(value) {
        // Remove todos os caracteres não numéricos
        value = value.replace(/\D/g, "");

        // Limita o telefone a 11 dígitos (incluindo DDD)
        if (value.length > 11) {
            value = value.slice(0, 11);
        }

        let formattedValue = "";

        if (value.length > 0) {
            // Formato: (11
            formattedValue += `(${value.slice(0, 2)}`;
        }

        if (value.length > 2) {
            // Formato: (11) 9
            formattedValue += `) ${value.slice(2, 3)}`;
        }

        if (value.length > 3) {
            // Formato: (11) 9 2222
            formattedValue += ` ${value.slice(3, 7)}`;
        }

        if (value.length > 7) {
            // Formato: (11) 9 2222-3333
            formattedValue += `-${value.slice(7, 11)}`;
        }

        return formattedValue;
    },

    cep(value){
        value = value.replace(/\D/g, "");

        if(value.length > 8){
            value = value.slice(0, -1);
        }

        value = value.replace(/(\d{5})(\d)/, "$1-$2");

        return value;
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

        if(PhotosUpload.hasLimit(event)) return;

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
    hasLimit(event){
        const { uploadLimit, input, preview } = PhotosUpload;
        const { files: fileList } = input;
        if (fileList.length > uploadLimit) {
            alert(`Envie no máximo ${uploadLimit} fotos!`);

            event.preventDefault();
            return true;
        }

        const photosDiv = [];
        preview.childNodes.forEach( item => {
            if(item.classList && item.classList.value == "photo"){
                photosDiv.push(item);
            }
        })

        const totalPhotos = fileList.length + photosDiv.length;

        if(totalPhotos > uploadLimit){
            alert("Você atingiu o limite máximo de upload de fotos");

            event.preventDefault();
            return true;
        }

        return false;
    },
    getAllFiles(){
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
    getRemoveButton(){
        const button = document.createElement('i');

        button.classList.add('material-icons');
        button.innerHTML = 'close';

        return button;
    },
    removePhoto(event){
        const photoDiv = event.target.parentNode;
        const photosArray = Array.from(PhotosUpload.preview.children);
        const index = photosArray.indexOf(photoDiv);

        PhotosUpload.files.splice(index, 1);

        PhotosUpload.input.files = PhotosUpload.getAllFiles();

        photoDiv.remove();
    },
    removeOldPhoto(event){
        const photoDiv = event.target.parentNode;

        if(photoDiv.id){
            const removedFiles = document.querySelector('input[name="removed_files"');

            if(removedFiles){
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
        ImageGallery.previews.forEach( preview => preview.classList.remove('active'));
        target.classList.add('active');

        ImageGallery.highlight.src = target.src;
        Lightbox.image.src = target.src;
    }
}

const Lightbox = {
    target: document.querySelector('.lightbox-target'),
    image: document.querySelector('.lightbox-target img'),
    closeButton: document.querySelector('.lightbox-target a.lightbox-close'),
    open(){
        Lightbox.target.style.opacity = 1;
        Lightbox.target.style.top = 0;
        Lightbox.target.style.bottom = 0;
        Lightbox.closeButton.style.top = 0;
    },
    close(){
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

        if(results.error){
            Validate.displayError(input, results.error);
        }
        
    },
    displayError(input, error){
        const div = document.createElement('div');
        div.classList.add('error');
        div.innerHTML = error;
        input.parentNode.appendChild(div);

        input.focus();
    },
    clearErrors(input){
        const errorDiv = input.parentNode.querySelector('.error');
        if(errorDiv){
            errorDiv.remove();
        }
    },
    isEmail(value){
        let error = null;

        const mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if(!value.match(mailFormat)){
            error = "Email inválido!";
        }

        return {
            error,
            value
        };
    },
    isCpfCnpj(value){
        value = value.replace(/\D/g, "");

        let error = null;

        if(value.length < 11){
            error = "Informe um documento válido!";
        }else if(value.length < 14 && value.length !== 11){
            error = "CNPJ inválido!";
        }

        return {
            error,
            value
        };
    },
    isCep(value){
        value = value.replace(/\D/g, "");

        let error = null;

        if(value.length !== 8){
            error = "CEP Inválido!";
        }

        return {
            error,
            value
        };
    }
}
const cpfInput = document.getElementById('cpfInput'); 
const cepinput = document.getElementById('inputCep');
const telefoneinput = document.getElementById('inputTelefone');

cpfInput.addEventListener('input', function () {
    Mask.apply(this, 'cpf');
});

cepinput.addEventListener('input',function(){
    Mask.apply(this, 'cep')
})

telefoneinput.addEventListener('input',function(){
    Mask.apply(this, 'telefone')
})



const inputData = document.getElementById('inputData');

inputData.addEventListener('input', function () {
    formatarEValidarData(this);
});

function formatarEValidarData(input) {
    let valor = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos

    if (valor.length > 8) {
        valor = valor.slice(0, 8); // Limita a entrada a 8 dígitos (ddmmyyyy)
    }

    if (valor.length >= 2) {
        valor = `${valor.slice(0, 2)}/${valor.slice(2)}`;
    }

    if (valor.length >= 4) {
        valor = `${valor.slice(0, 5)}/${valor.slice(5)}`;
    }

    input.value = valor;

    // Verifica se o segundo dígito do dia foi digitado
    if (valor.length >= 2) {
        const dia = parseInt(valor.slice(0, 2), 10);
        if (dia > 31) {
            alert('Digite um dia válido (até 31).');
            valor = valor.slice(0, 1); // Mantém apenas o primeiro dígito do dia
        }
    }

    // Verifica se o quarto dígito do mês foi digitado
    if (valor.length >= 5) {
        const mes = parseInt(valor.slice(3, 5), 10);
        if (mes > 12) {
            alert('Digite um mês válido (até 12).');
            valor = valor.slice(0, 4); // Mantém apenas os primeiros quatro dígitos do mês
        }
    }
    
    // Verifica se o quarto dígito do ano foi digitado
    if (valor.length === 10) {
        const ano = parseInt(valor.slice(6, 10), 10);
        const anoAtual = new Date().getFullYear();
        if (ano < 1900 || ano > anoAtual) {
            alert(`Digite um ano válido entre 1900 e ${anoAtual}.`);
            valor = valor.slice(0, 6); // Mantém apenas o dia e mês
        }
    }

    input.value = valor;
}



const inputNome = document.getElementById('inputNome');

inputNome.addEventListener('input', function () {
    validarNome(this);
});

function validarNome(input) {
    const valor = input.value;
    const regex = /^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/; // Expressão regular para letras maiúsculas, minúsculas e acentos

    if (!regex.test(valor)) {
        alert('Digite um nome válido (somente letras maiúsculas, minúsculas e acentos).');
        input.value = valor.replace(/[^A-Za-zÀ-ÖØ-öø-ÿ\s]+/g, ''); // Remove caracteres inválidos
    }
}


const inputSenha = document.querySelector('#inputSenha');
const inputConfirmarSenha = document.querySelector('#inputConfirmarSenha');
const passwordStyle = document.getElementById("inputSenha").style;
//Validando Senha
function validarSenha(){

    //teste
    //let passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[$*&@#])(?:([0-9a-zA-Z$*&@#])(?!\1)){8,}$/;
    let passwordRegex = /^(?=.*[a-z]+)(?=.*[A-Z]+)(?=.*\d+)(?=.*[@$!%*?&]+)[A-Za-z\d@$!%*?&]{8,16}$/g;
    let resultsPassword = passwordRegex.test(inputSenha.value);

    let msg = document.getElementById("password-error");

    if(inputSenha.value == ""){
        msg.style.display = "block";
        msg.innerHTML = "Campo obrigatório*";
        passwordStyle.borderColor = "red";
        return false;
    }else if(resultsPassword === false){
        msg.style.display = "block";
        msg.innerHTML = "Senha inválida!*";
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
    }else if(passwordInput.value !== inputConfirmarSenha.value){
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


// Função para validar as senhas
function validarSenhas() {
    // Obtém os campos de senha
    const inputSenha = document.querySelector('#inputSenha');
    const inputConfirmarSenha = document.querySelector('#inputConfirmarSenha');
  
    // Verifica se as senhas são iguais
    if (inputSenha.value !== inputConfirmarSenha.value) {
      // Exibe uma mensagem de erro
      document.getElementById('confirm-error').innerHTML = 'As senhas não são iguais.';
      return false;
    }
  
    // Verifica se a senha é válida
    if (!validarSenha(inputSenha.value)) {
      // Exibe uma mensagem de erro
      document.getElementById('password-error').innerHTML = 'A senha deve ter entre 8 e 20 caracteres, conter pelo menos uma letra maiúscula, uma letra minúscula, um número e um caractere especial.';
      return false;
    }
  
    // Se as senhas forem válidas, retorna true
    return true;
  }
  
  // Adiciona um event listener ao campo de senha para chamar a função validarSenhas() quando o usuário pressionar a tecla Enter
  document.querySelector('#inputSenha').addEventListener('keydown', function(event) {
    if (event.keyCode == 13) {
      validarSenha();
    }
  });


