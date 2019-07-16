window.onload = function(){
//falta validar tipo de datos y file
var form = document.querySelector('.form');
var elementos = form.elements;

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

form.onsubmit = function(event) {
  for (elemento of elementos){
    if (elemento.type == 'submit' || elemento.type == 'hidden') {
      continue;
    }

    if (elemento.parentElement.children[2]) {
          elemento.parentElement.removeChild(elemento.parentElement.children[2]);
    }
    if (elemento.type != 'file' && validarVacio(elemento)) {
      event.preventDefault();
    }
  }
}

for (elemento of elementos){
  if (elemento.type == 'submit' || elemento.type == 'hidden') {
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
