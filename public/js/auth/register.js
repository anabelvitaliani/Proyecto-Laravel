window.onload = function () {

var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

var form = document.querySelector('.register');
var elementos = form.elements;
var email = document.querySelector('#email');
var password = document.querySelector('#password');
var confirm = document.querySelector('#password_confirmation');
var file = document.querySelector('#file');


function validarVacio(input) {
    if (input.value.trim() == '') {
        pintarError(input, 'Por favor, completá este campo');
        input.value = "";
        return true;
    }
    return false
}

function pintarError(input, mensaje) {
    var mark = document.createElement('mark');
    mark.innerText = mensaje;
    input.parentElement.append(mark);
}

form.onsubmit = function (event) {

  for (elemento of elementos) {
  if (elemento.type == 'submit' || elemento.type == 'hidden' || elemento.type == 'reset' || elemento.id == 'com') {
    continue;
  }

  if (elemento.parentElement.children[2]) {
        elemento.parentElement.removeChild(elemento.parentElement.children[2]);
  }

  if (elemento.type != 'file' && validarVacio(elemento)) {
    event.preventDefault();
  } else if (elemento.name == 'email' && !regexEmail.test(elemento.value)) {
        pintarError(elemento, 'Email invalido');
        event.preventDefault();
  } else if (elemento.name == 'password') {
        var confirm = document.querySelector('#password_confirmation');
        if (elemento.value.length < 8) {
            pintarError(elemento, 'La constraseña debe tener minimo 8 caracteres');
            event.preventDefault();
        } else if (elemento.value != confirm.value) {
              pintarError(elemento, 'Las contraseñas no coinciden');
              event.preventDefault();
          }
    }
  }

  if (file.value.split(".")[file.value.split(".").length-1] != 'png' || file.value.split(".")[file.value.split(".").length-1]!='jpg' || file.value.split(".")[file.value.split(".").length-1]!='img' || file.value.split(".")[file.value.split(".").length-1]!='bmp') {

    pintarError(file, "Formato inválido");
  }

}

file.onblur = function(event){
  if (this.parentElement.children[2]) {
        this.parentElement.removeChild(this.parentElement.children[2]);
  }
  if (file.value.split(".")[file.value.split(".").length-1] != 'png' || file.value.split(".")[file.value.split(".").length-1]!='jpg' || file.value.split(".")[file.value.split(".").length-1]!='img' || file.value.split(".")[file.value.split(".").length-1]!='bmp') {
    console.log("hola")
    pintarError(file, "Formato inválido");
  }

}
email.onblur = function(event){
  if (this.parentElement.children[2]) {
        this.parentElement.removeChild(this.parentElement.children[2]);
  }
  if(!validarVacio(this) && !regexEmail.test(this.value)){
    pintarError(this, 'Email invalido');
  }
}

password.onblur = function(event){
  if (this.parentElement.children[2]) {
        this.parentElement.removeChild(this.parentElement.children[2]);
  }
  if (!validarVacio(this) && this.value.length < 8) {
    pintarError(this, 'La constraseña debe tener minimo 8 caracteres');
  } else if(this.value != confirm.value){
      pintarError(this, 'Las contraseñas no coinciden');
  }
}

confirm.onblur = function(event){
  if (this.parentElement.children[2]) {
        this.parentElement.removeChild(this.parentElement.children[2]);
  }
  if (!validarVacio(this) && this.value.length < 8) {
    pintarError(this, 'La constraseña debe tener minimo 8 caracteres');
  } else if(this.value != password.value){
      pintarError(password, 'Las contraseñas no coinciden');
  }
  else if(this.value == password.value){
    if (password.parentElement.children[2]) {
          password.parentElement.removeChild(password.parentElement.children[2]);
    }
  }
}

for (elemento of elementos) {
  if (elemento.type == 'submit' || elemento.type == 'hidden' || elemento.type == 'reset' || elemento.id == 'com' || elemento.id == 'email' || elemento.id == 'password' || elemento.id == 'password_confirmation') {
    continue;
  }

  elemento.onblur = function(event){
    if (this.parentElement.children[2]) {
          this.parentElement.removeChild(this.parentElement.children[2]);
    }
    validarVacio(this);
    }
  }
}
