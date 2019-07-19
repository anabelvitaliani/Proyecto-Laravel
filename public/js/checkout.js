var eliminar = document.querySelectorAll('.btn-btn-check-q');
var total = parseFloat(document.querySelector("span.total").innerText);

console.log(total);
for (boton of eliminar) {
  boton.onclick = function(event) {
    var precio = parseFloat(this.getAttribute('precio'))

  fetch('http://localhost:8000/deleteToCart/'+ this.value)
  .then(function(response){
    return response.json();
  })
  .then((data) => {
    console.log(data)
    var li = document.querySelector('li#li-'+data.eliminado);

    li.parentElement.removeChild(li);
    document.querySelector(".total").innerText = total - precio;
  })
  .catch(function(error) {

  })
  }
}
