var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

function validarVacio(input) {
    if (input.value.trim() == '') {
        pintarError(input, 'Por favor, completá este campo');
        input.value="";
        return true;
    }
    return false
}

function pintarError(input, mensaje) {
  //  var error = document.createElement('span');
    //error.setAttribute('class','invalid-feedback');
    var strong = document.createElement('strong');
    strong.innerText = mensaje;
    var div = elemento.parentElement;
    if (div.children[2]) {
        div.removeChild(div.children[2]);
    }
    error.append(strong);
  //  div.append(error);
}

window.onload = function () {

  var form = document.querySelector('form');

  // email.onblur = function () {
  //     if (regexEmail.test(this.value)) {
  //         this.classList.remove('is-invalid');
  //     }
  // }

  form.onsubmit = function (event) {
      var elementos = this.elements;
      console.log(elementos);
      for (elemento of elementos) {
          if (elemento.type == 'submit' || elemento.type == 'hidden') {
              continue;
          }
          if (elemento.type != 'file' && validarVacio(elemento)) {
              event.preventDefault();
          }
          if (elemento.name == 'email' &&  !regexEmail.test(elemento.value)) {
              pintarError(elemento, 'Email invalido');
              event.preventDefault();
          }
          if (elemento.name == 'password') {
              var confirm = document.querySelector('#password_confirmation');
              if (elemento.value.length < 8) {
                  pintarError(elemento, 'El password debe tener minimo 8 caracteres');
                  event.preventDefault();
              } else if (elemento.value != confirm.value) {
                  pintarError(elemento, 'Los pass no coinciden');
                  event.preventDefault();
              }
          }
      }
  }

}
