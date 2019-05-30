<?php
require_once("funciones.php");
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/productos.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC:700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    

    <title>Chocolatemia</title>
  </head>
  <body>
     <div class="contenedor">
      <?php
        require_once("menu.php");
       ?>
    </div>
  <main>
    <h2>Productos</h2>
  <div class="productos">
   <div class="wrap">
        <div class="tarjeta-wrap">
          <div class="tarjeta">
            <div class="adelante card1"></div>
            <div class="atras">
              <div class="texto">
              <p>Dos galletas rellenos con mucho dulce de leche y cubierto con chocolate blanco.
                <br>
                <strong>Presentacion</strong>
                <p>Caja x 8 unidades $300</p>
                <p>Caja x 10 unidades $400</p>
              </p>
              </div>
              <br>
              <div class="button">
              <a href="#" target="_blank" >
              <i class="fas fa-heart"></i> Alfajores
              </a>
              </div>
            </div>
          </div>
        </div>
        <div class="tarjeta-wrap">
          <div class="tarjeta">
            <div class="adelante card2"></div>
            <div class="atras">
              <div class="texto">
              <p>Delicioso bocadito de chocolate relleno con un suave y tentador dulce de leche.
                <br>
                <strong>Presentacion</strong>
                <p>Caja x 8 unidades $200</p>
                <p>Caja x 10 unidades $300</p>
              </p>
              </div>
              <div class="button">
              <a href="#" target="_blank" >
              <i class="fas fa-heart"></i> Bocaditos
              </a>
              </div>
            </div>
          </div>
        </div>
        <div class="tarjeta-wrap">
          <div class="tarjeta">
            <div class="adelante card3"></div>
            <div class="atras">
              <div class="texto">
              <p>Bombones de chocolate con leche, chocolate blanco y chocolate semiamargo relleno de dulce de leche.
              <br>
              <strong>Presentacion</strong>
              <p>7 unidades, Peso neto 89g</p>
              <p>21 unidades, Peso neto 267g</p>
              <p>3 unidades, Peso neto 38g</p>
              </p>
              </div>
              <div class="button">
              <a href="#" target="_blank" >
              <i class="fas fa-heart"></i> Bombones
              </a>
              </div>
            </div>
          </div>
        </div>
        <div class="tarjeta-wrap">
          <div class="tarjeta">
            <div class="adelante card4"></div>
            <div class="atras">
              <div class="texto">
              <p>Deliciosas tortas de chocolate.
              <br>
              <strong>Presentacion</strong>
              <p>Peso neto 1kg $400 </p>
              <p>Peso neto 2 kg $550 </p>
              <p>Peso neto 3 kg $700</p>
              </p>
              </div>
              <div class="button">
              <a href="#" target="_blank" >
              <i class="fas fa-heart"></i> Tortas
              </a>
              </div>
            </div>
          </div>
        </div>
        <div class="tarjeta-wrap">
          <div class="tarjeta">
            <div class="adelante card5"></div>
            <div class="atras">
              <div class="texto">
              <p>Galletas de Chocolate
              <br>
              <strong>Pesentacion</strong>
              <p>peso neto 264 Gr $240</p>
              </p>
              <br>
              </div>
              <div class="button">
              <a href="#" target="_blank" >
              <i class="fas fa-heart"></i> Cookies
              </a>
              </div>
            </div>
          </div>
        </div>
        <div class="tarjeta-wrap">
          <div class="tarjeta">
            <div class="adelante card6"></div>
            <div class="atras">
              <div class="texto">
              <p>Mufffings - Cup Cake - Magdalenas .
              <br>
              <strong>Presentacion</strong>
              <p>3 Unidades $200</p>
              <p>6 Unidades $350</p>
              </p>
              </div>
              <div class="button">
              <a href="#" target="_blank" >
              <i class="fas fa-heart"></i> Postres
              </a>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
  </main>
    <?php
      require_once("footer.php");
     ?>
  </body>
</html>
