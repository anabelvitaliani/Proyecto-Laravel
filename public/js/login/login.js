window.onload = function() {

  var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

  var form = document.querySelector('form');

    var email = document.querySelector('#email');
    var password = document.querySelector('#password');


    email.onblur = function () {
      if (regexEmail.test(this.value)) {
        if (this.parentElement.children[2]) {
          this.parentElement.removeChild(this.parentElement.children[2]);
            }
          }
        }

    password.onblur = function() {
      if(password.value != ''){
        console.log("hola");
        if (this.parentElement.children[2]) {
          this.parentElement.removeChild(this.parentElement.children[2]);
            }
      }
    }

    form.onsubmit = function (event) {
   event.preventDefault();
      if (email.value == '') {
        var error = document.createElement('span');
        error.innerText = 'Este campo debe de estar lleno';
        var div = email.parentElement;

        if (div.children[2]) {
          div.removeChild(div.children[2]);
        }
        div.append(error);
        event.preventDefault();
      }

      if (password.value == '') {
        var error = document.createElement('span');
        error.innerText = 'Debe de estar lleno';
        var div = password.parentElement;
        if (div.children[2]) {
          div.removeChild(div.children[2]);
        }
        div.append(error);
        event.preventDefault();
      }
      event.preventDefault();
      if (!regexEmail.test(email.value)) {
            var error = document.createElement('span');
            error.innerText = 'Email invalido';
            var div = email.parentElement;
            if (div.children[2]) {
                div.removeChild(div.children[2]);
            }
            div.append(error);
            event.preventDefault();
        }

      }
};
