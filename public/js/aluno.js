document.getElementById('inputImage').addEventListener('change', function(e) {
    const imageFile = e.target.files[0];
    if (imageFile) {
        const reader = new FileReader();
        reader.onload = function(event) {
            const avatarImage = document.getElementById('avatarImage');
            const icon = document.querySelector('.bi-person-add');
            avatarImage.src = event.target.result;
            avatarImage.style.display = 'block';
            icon.style.display = 'none';

            avatarImage.style.width = 'auto';
            avatarImage.style.height = 'auto';

            const imageContainer = document.getElementById('imageContainer');
            imageContainer.style.width = '200px';
            imageContainer.style.height = '200px';
            imageContainer.style.overflow = 'hidden';
            imageContainer.style.borderRadius = '50%';

            avatarImage.style.maxWidth = '120%';
            avatarImage.style.maxHeight = '120%';
            avatarImage.style.display = 'block';
            avatarImage.style.margin = 'auto';
        };
        reader.readAsDataURL(imageFile);
    }
});


function toggleElements(inputSim, inputNao, textArea) {
inputSim.addEventListener('click', function() {
if (this.checked) {
    textArea.style.display = 'block';
} else {
    textArea.style.display = 'none';
}
});

inputNao.addEventListener('click', function() {
if (this.checked) {
    textArea.style.display = 'none';
}
});
}

const sedentarioSim = document.getElementById('sedentarioSim');
const sedentarioNao = document.getElementById('sedentarioNao');
const textAreasAtividade = document.getElementById('textAreasAtividade');
const textAreasFrequencia = document.getElementById('textAreasFrequencia');
const textAreasDuracao = document.getElementById('textAreasDuracao');

toggleElements(sedentarioSim, sedentarioNao, textAreasAtividade);
toggleElements(sedentarioSim, sedentarioNao, textAreasFrequencia);
toggleElements(sedentarioSim, sedentarioNao, textAreasDuracao);

const fumaSim = document.getElementById('fumaSim');
const fumaNao = document.getElementById('fumaNao');
const textFuma = document.getElementById('textFuma');

toggleElements(fumaSim, fumaNao, textFuma);

const restricaoSim = document.getElementById('restricaoSim');
const restricaoNao = document.getElementById('restricaoNao');
const texRestricao = document.getElementById('texRestricao');

toggleElements(restricaoSim, restricaoNao, texRestricao);

const acidenteSim = document.getElementById('checkAcidenteSim');
const acidenteNao = document.getElementById('checkAcidenteNao');
const textOutrosAcidente = document.getElementById('textOutrosAcidente');

toggleElements(acidenteSim, acidenteNao, textOutrosAcidente);

const checkAlergiaSim = document.getElementById('checkAlergiaSim');
const checkAlergiaNao = document.getElementById('checkAlergiaNao');
const textOutrosAlergia = document.getElementById('textOutrosAlergia');

toggleElements(checkAlergiaSim, checkAlergiaNao, textOutrosAlergia);

function toggleTextElement(checkbox, textElement) {
checkbox.addEventListener('change', function() {
textElement.style.display = this.checked ? 'block' : 'none';
});
}

const checkOutrosDiagnosticado = document.getElementById('checkOutrosDiagnosticado');
const textOutrosDiagnosticado = document.getElementById('textOutrosDiagnosticado');
toggleTextElement(checkOutrosDiagnosticado, textOutrosDiagnosticado);

const checkboxOutrosTrabalho = document.getElementById('checkOutrosTrabalho');
const campoTextoOutrosTrabalho = document.getElementById('textOutrosTrabalho');
toggleTextElement(checkboxOutrosTrabalho, campoTextoOutrosTrabalho);

const checkboxOutrosCirurgia = document.getElementById('checkOutrosCirurgia');
const campoTextoOutrosCirurgia = document.getElementById('textOutrosCirurgia');
toggleTextElement(checkboxOutrosCirurgia, campoTextoOutrosCirurgia);


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

function imprimir() {
    adicionarBootstrapParaImpressao();
    window.print();
}

function adicionarBootstrapParaImpressao() {
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css';
    link.integrity = 'sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9';
    link.crossOrigin = 'anonymous';
    link.media = 'print';
    document.head.appendChild(link);
}
/*
function imprimirComponente() {
    var conteudoParaImpressao = document.getElementById('conteudo-impressao').innerHTML;
    var win = window.open('', '_blank');
    win.document.write('<html><head><title>Impressão </title></head><body>');
    win.document.write(conteudoParaImpressao);
    win.document.write('</body></html>');
    win.document.close();
    win.print();
    win.close();
}*/