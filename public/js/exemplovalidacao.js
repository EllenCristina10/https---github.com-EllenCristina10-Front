/*const Mask = {
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
    cpfCnpj(value){
        if (typeof value !== "string") {
            return "";
        }
    
        value = value.replace(/\D/g, "");
    
        //11122233344
        value = value.replace(/(\d{3})(\d)/, "$1.$2");
    
        //111.22233344
        value = value.replace(/(\d{3})(\d)/, "$1.$2");
    
        //111.222.33344
        value = value.replace(/(\d{3})(\d)/, "$1-$2");
    
        //111.222.333-44
    
        if (value.length > 14) {
            value = value.slice(0, 14);
        }
    
        return value;
    },
    cep(value){
        value = value.replace(/\D/g, "");

        if(value.length > 8){
            value = value.slice(0, -1);
        }

        value = value.replace(/(\d{5})-(\d{3})/, "$1-$2");

        return value;
    },
    data(value){
        value = value.replace(/\D/g, "");

        if(value.length > 8){
            value = value.slice(0, -1);   
        }
        
        value = value.replace(/(\d{2})-(\d{2})-(\d{4})/, "$1/$2/$3");

        return value;
    },
    email(value){
        
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
    },
    isData(value){
        value = value.replace(/\D/g, "");

        let error = null;

        if(value.lenght !== 8){
            error = "Data inválida!";
        }

        return {
            error,
            value
        };
    }
}

const cpfInput = document.querySelector('#inputCPF');

cpfInput.addEventListener('keyup', function () {
  Mask.apply(this, 'cpfCnpj');
});

const emailInput = document.querySelector('#inputEmail');

emailInput.addEventListener('keyup', function () {
    Mask.apply(this, 'email');
});

const cepInput = document.querySelector('#inputCep');

cepInput.addEventListener('keyup', function () {
    Mask.apply(this, 'cep');
});

const dataInput = document.querySelector('#inputData');

dataInput.addEventListener('blur', function () {
    Mask.apply(this, 'data');
});


form.addEventListener("submit", (event)=> {
    event.preventDefault();

    if(emailInput.value === "" || !isEmail(emailInput.value)){
        alert("Por favor, preecha o email");
        return;
    }

    form.submit();
});


/*

/**
Validate an email address.
Provide email address (raw input)
Returns true if the email address has the email 
address format and the domain exists.
*/

/*function validEmail($email)
{
   $isValid = true;
   $atIndex = strrpos($email, "@");
   if (is_bool($atIndex) && !$atIndex)
   {
      $isValid = false;
   }
   else
   {
      $domain = substr($email, $atIndex+1);
      $local = substr($email, 0, $atIndex);
      $localLen = strlen($local);
      $domainLen = strlen($domain);
      if ($localLen < 1 || $localLen > 64)
      {
         // local part length exceeded
         $isValid = false;
      }
      else if ($domainLen < 1 || $domainLen > 255)
      {
         // domain part length exceeded
         $isValid = false;
      }
      else if ($local[0] == '.' || $local[$localLen-1] == '.')
      {
         // local part starts or ends with '.'
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $local))
      {
         // local part has two consecutive dots
         $isValid = false;
      }
      else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
      {
         // character not valid in domain part
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $domain))
      {
         // domain part has two consecutive dots
         $isValid = false;
      }
      else if
(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/',
                 str_replace("\\\\","",$local)))
      {
         // character not valid in local part unless 
         // local part is quoted
         if (!preg_match('/^"(\\\\"|[^"])+"$/',
             str_replace("\\\\","",$local)))
         {
            $isValid = false;
         }
      }
      if ($isValid && !(checkdnsrr($domain,"MX") || 
 ↪checkdnsrr($domain,"A")))
      {
         // domain not found in DNS
         $isValid = false;
      }
   }
   return $isValid;
}*/