window.onload = function () {

var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

var form = document.querySelector('form');
var email = document.querySelector('#email');
var div = document.querySelector('.div');

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

    div.append(mark);
}



form.onsubmit = function (event) {

  if (div.children[2]) {
        div.removeChild(div.children[2]);
  }
  var elementos = this.elements;
      //console.log(elementos);event.preventDefault();
  for (elemento of elementos) {

  if (elemento.type == 'submit' || elemento.type == 'hidden' || elemento.type == 'reset' || elemento.id == 'comentarios') {
    continue;
  }

  if (elemento.type != 'file' && validarVacio(elemento)) {
    event.preventDefault();
  } else if (elemento.name == 'email' && !regexEmail.test(elemento.value)) {
        pintarError(elemento, 'Email invalido');
        event.preventDefault();
  } else if (elemento.name == 'password') {
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

email.onblur = function () {
  console.log(email);
  if (div.children[2]) {
        div.removeChild(div.children[2]);
  }
  if (validarVacio(this)) {
    validarVacio(this);
  } else if(!regexEmail.test(elemento.value))
      pintarError(elemento, 'Email invalido');
}

/*var elementos = this.elements;

for (elemento of elementos) {
elemento.onblur = function() {

      if (div.children[2]) {
            div.removeChild(div.children[2]);
      }

          //console.log(elementos);event.preventDefault();


      if (elemento.type == 'submit' || elemento.type == 'hidden' || elemento.type == 'reset' || elemento.id == 'comentarios') {
        continue;
      }

      if (elemento.type != 'file' && validarVacio(elemento)) {
        event.preventDefault();
      } else if (elemento.name == 'email' && !regexEmail.test(elemento.value)) {
            pintarError(elemento, 'Email invalido');
            event.preventDefault();
      } else if (elemento.name == 'password') {
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
}*/
}
