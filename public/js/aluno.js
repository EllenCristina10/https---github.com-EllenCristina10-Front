document.getElementById('inputImage').addEventListener('change', function (e) {
    const imageFile = e.target.files[0];
    const avatarImage = document.getElementById('avatarImage');
    const icon = document.querySelector('.bi-person-add');
    const imageContainer = document.getElementById('imageContainer');

    if (imageFile) {
        const reader = new FileReader();
        reader.onload = function (event) {
            avatarImage.src = event.target.result;
            avatarImage.style.display = 'block';
            icon.style.display = 'none';

            // Adicione a classe "border-green" para destacar as bordas da imagem
            imageContainer.classList.add('border-green');

            // Defina a borda do input como verde
            e.target.style.borderColor = 'green';
        };
        reader.readAsDataURL(imageFile);
    } else {
        // Caso o usuário não tenha carregado uma imagem, remova a classe "border-green"
        imageContainer.classList.remove('border-green');

        // Reverta a cor da borda do input para a cor padrão
        e.target.style.borderColor = '';
    }
});


function toggleElements(inputSim, inputNao, textArea) {
    inputSim.addEventListener('click', function () {
        if (this.checked) {
            textArea.style.display = 'block';
        } else {
            textArea.style.display = 'none';
        }
    });

    inputNao.addEventListener('click', function () {
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
    checkbox.addEventListener('change', function () {
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

// Seleção de estado e cidade para dados do instrutor
const urlEstados = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados'
const estado = document.getElementById('inputEstado')
const cidade = document.getElementById('inputCidade')


estado.addEventListener('change', async function () {
    const urlCidades = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/' + estado.value + '/municipios'
    const request = await fetch(urlCidades)
    const response = await request.json()
    let options = ''
    response.forEach(function (cidade) {
        options += '<option>' + cidade.nome + '</option>'

    })
    cidade.innerHTML = options
})


window.addEventListener('load', async () => {
    const request = await fetch(urlEstados)
    const response = await request.json()


    const options = document.createElement("optgroup")
    options.setAttribute('label', 'estados')
    response.forEach(function (uf) {
        options.innerHTML += '<option>' + uf.sigla + '</option>'
    })

    estado.append(options)
})

