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
      if(password.value.trim() != ''){
        console.log("hola");
        if (this.parentElement.children[2]) {
          this.parentElement.removeChild(this.parentElement.children[2]);
            }
      }
    }

    form.onsubmit = function (event) {

      if (email.value.trim() == '') {
        var error = document.createElement('span');
        error.innerText = 'Por favor, complete este campo';
        var div = email.parentElement;

        if (div.children[2]) {
          div.removeChild(div.children[2]);
        }
        div.append(error);
        event.preventDefault();
      }

      if (password.value.trim() == '') {
        var error = document.createElement('mark');
        error.innerText = 'Por favor, complete este campo';
        var div = password.parentElement;
        if (div.children[2]) {
          div.removeChild(div.children[2]);
        }
        div.append(error);
        event.preventDefault();
      }
      if (!regexEmail.test(email.value)) {
            var error = document.createElement('mark');
            error.innerText = 'El mail ingresado es invalido';
            var div = email.parentElement;
            if (div.children[2]) {
                div.removeChild(div.children[2]);
            }
            div.append(error);
            event.preventDefault();
        }

      }
};
