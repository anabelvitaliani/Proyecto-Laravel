window.onload = function(){
var regexNum = /^[0-9]+$/

var form = document.querySelector('.form');
var elementos = form.elements;
var file = document.querySelector('#file');
//var num = document.querySelectorAll('.num')
//var desc = document.querySelector('.desc');
//var precio = document.querySelector('.precio');
//console.log(num.class)
/*function validarNum(input) {
  if (!regexNum.test(input.value)) {
    pintarError(input, "Este campo debe contener solo numeros");
    return true;
  }
  return false;
}*/

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
    }  /*else if(elemento.class == 'num' && validarNum(elemento)){
      console.log('bla')
      event.preventDefault();
    }*/
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
    pintarError(file, "Formato inválido");
  }

}

/*num.onblur = function(event){
  console.log('s')
}*/
for (elemento of elementos){
  if (elemento.type == 'submit' || elemento.type == 'hidden') {
    continue;
  }
  elemento.onblur = function(event){
    if (this.parentElement.children[2]) {
          this.parentElement.removeChild(this.parentElement.children[2]);
    }
    validarVacio(this);

  /*  if(elemento.class == 'num' && validarNum(this)){ }*/
  }
}
}
