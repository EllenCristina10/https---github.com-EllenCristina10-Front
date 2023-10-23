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


function criarConteudoParaImpressao() {
    var conteudoParaImpressao = document.body.cloneNode(true);

    var elementosParaRemover = conteudoParaImpressao.querySelectorAll("nav, footer");
    elementosParaRemover.forEach(function(elemento) {
        elemento.parentNode.removeChild(elemento);
    });

    var elementosParaAdicionarClasse = conteudoParaImpressao.querySelectorAll(".conteudo-impressao");
    elementosParaAdicionarClasse.forEach(function(elemento) {
        elemento.style.display = "block";
    });

    return conteudoParaImpressao;
}
function imprimir() {

var linkForm = document.createElement("link");
    linkForm.rel = "stylesheet";
    linkForm.type = "text/css";
    linkForm.href = "{{ asset('css/form.css') }}";
    document.head.appendChild(linkForm);

    var linkApp = document.createElement("link");
    linkApp.rel = "stylesheet";
    linkApp.type = "text/css";
    linkApp.href = "{{ asset('css/app.css') }}";
    document.head.appendChild(linkApp);

    var link = document.createElement("link");
    link.rel = "stylesheet";
    link.type = "text/css";
    link.href =
        "https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"; 
    document.head.appendChild(link);

    var estiloInterno = document.createElement("style");
    estiloInterno.type = "text/css";
    estiloInterno.innerHTML = "\
        .conteudo-impressao {\
            color: black;\
            font-size: 14px;\
            font-family: Arial, sans-serif;\
        }";
    document.head.appendChild(estiloInterno);

    var conteudoParaImpressao = criarConteudoParaImpressao();

    var win = window.open("about:blank");
    win.document.open();
    win.document.write("<html><head><title>Impressão</title></head><body>");
    win.document.write(conteudoParaImpressao.innerHTML);
    win.document.write("</body></html>");
    win.document.close();

    link.parentNode.removeChild(link)
    linkForm.parentNode.removeChild(linkForm);
    linkApp.parentNode.removeChild(linkApp);

    win.print();
    win.close();
}