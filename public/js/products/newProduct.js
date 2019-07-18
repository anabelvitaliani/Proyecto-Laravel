window.onload = function(){
var regexNum = /^[0-9]+$/;
var regexNum = /^[0-9]+$/;
var regexString = /^[a-z A-Z]{3,30}$/;

var form = document.querySelector('.form');
var elementos = form.elements;
var file = document.querySelector('#file');
var descuento = document.querySelector('#desc');
var precio = document.querySelector('#precio');
var nombre = document.querySelector('#nombre');
var descripcion = document.querySelector('#descripcion');


function validarString(input){
  if (!(regexString).exec(input.value)) {
    pintarError(input, "Este campo debe contener solo letras");
    return true;
  }
  return false;
}

function validarNum(input) {
  if (!(regexNum).exec(input.value)) {
    pintarError(input, "Este campo debe contener solo numeros");
    return true;
  }
  return false;
}

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
    } else if((elemento.id == 'precio' || elemento.id == 'desc') && validarNum(elemento)){
      event.preventDefault();
    } else if((elemento.name == 'descripcion' || elemento.name == 'nombre') && validarString(elemento)){
      event.preventDefault();
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
    pintarError(file, "Formato inválido");
  }
}

nombre.onblur = function(event){
  if (this.parentElement.children[2]) {
        this.parentElement.removeChild(this.parentElement.children[2]);
  }
  if(!validarVacio(this) && validarString(this)){}
}

descripcion.onblur = function(event){
  if (this.parentElement.children[2]) {
        this.parentElement.removeChild(this.parentElement.children[2]);
  }
  if(!validarVacio(this) && validarString(this)){}
}

descuento.onblur = function(event){
  if (this.parentElement.children[2]) {
        this.parentElement.removeChild(this.parentElement.children[2]);
  }
  if(!validarVacio(this) && validarNum(this)){}
}

precio.onblur = function(event){
  if (this.parentElement.children[2]) {
        this.parentElement.removeChild(this.parentElement.children[2]);
  }
  if(!validarVacio(this) && validarNum(this)){}
}

for (elemento of elementos){
  if (elemento.type == 'submit' || elemento.type == 'hidden' || elemento.id == 'desc' || elemento.id == 'precio' || elemento.id == 'nombre' || elemento.id == 'descripcion') {
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
