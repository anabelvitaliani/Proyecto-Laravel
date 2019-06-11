      <header class="menu">
        <div class="nombreymenu">
          <h4 class="nombreh4"><a class="nombre" href="/">Chocolatemia</a></h4>
        </div>
        <!--<div class="">
        <img src="../Imagenes/img/menu2.png" alt="menu" class="hamburguesa">

        </div>-->
        <nav class="navegador">
          <input type="checkbox" class="menu-hamb-check" id="menu-hamb">
          <hr>
          <ul>
            <li><a href="/">Inicio</a></li>
          @guest
            <li><a href="register.php">Registrate</a></li>
            <li><a href="login.php">Iniciar Sesión</a></li>
          @else
            <li><a href="/preguntas">Cerrar Sesión</a></li>
          @endguest
            <li><a href="/preguntas">Preguntas Frecuentes</a></li>
            <li><a href="#contacto">Contactate con nosotros</a></li>

        <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
          </ul>
          <label for="menu-hamb" class="label-hamb"><img src="../Imagenes/img/menu2.png" alt="menu" class="hamburguesa"></label>
        </nav>
      </header>
