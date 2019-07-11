window.onload = function () {

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
    var mark = document.createElement('mark');
    mark.innerText = mensaje;
    var div = elemento.parentElement;
    if (div.children[2]) {
        div.removeChild(div.children[2]);
    }
    div.append(mark);
  //  div.append(error);
}

  var form = document.querySelector('form');

  // email.onblur = function () {
  //     if (regexEmail.test(this.value)) {
  //         this.classList.remove('is-invalid');
  //     }
  // }

  form.onsubmit = function (event) {
      var elementos = this.elements;
      //console.log(elementos);event.preventDefault();
      for (elemento of elementos) {
          if (elemento.type == 'submit' || elemento.type == 'hidden' || elemento.type == 'reset' ) {
              continue;
          }
          if (elemento.type != 'file' && validarVacio(elemento)) {
              event.preventDefault();
          } else if (elemento.name == 'email' && !elemento.parentElement.children[2] && !regexEmail.test(elemento.value)) {
              pintarError(elemento, 'Email invalido');
              event.preventDefault();
          }

          if (elemento.name == 'password') {
              var confirm = document.querySelector('#password_confirmation');
              if (elemento.value.length < 8) {
                  pintarError(elemento, 'El password debe tener minimo 8 caracteres');
                  event.preventDefault();
              } else if (elemento.value != confirm.value) {
                  pintarError(elemento, 'Las contraseñas no coinciden');
                  event.preventDefault();
              }
          }
      }
  }

var elementos = form.elements;

for (elemento of elementos) {

  elemento.onblur = function() {
    if (this.type != 'submit' && this.type != 'hidden' && this.type != 'reset' ) {

      //console.log(!validarVacio(this), this.parentElement)
      if (!validarVacio(this)) {
        console.log(elemento.name, !regexEmail.test(elemento.value))
        if (this.parentElement.children[2]) {
          this.parentElement.removeChild(this.parentElement.children[2]);
          if (elemento.name == 'email' &&  !regexEmail.test(elemento.value)) {
            pintarError(elemento, 'Email invalido');
          }
        }
      }

      if (elemento.name == 'email' &&  !regexEmail.test(elemento.value)) {
        console.log('bla');
        if (this.parentElement.children[2]) {
          this.parentElement.removeChild(this.parentElement.children[2]);
            }
          }

      }
    }
  }


}
