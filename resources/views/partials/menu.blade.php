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
              <li><a href="/register">Registrate</a></li>
              <li><a href="/login">Iniciar Sesión</a></li>

            @endguest
            <li><a href="/preguntas">Preguntas Frecuentes</a></li>
            <li><a href="#contacto">Contactate con nosotros</a></li>
            @auth
              <li><a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">Cerrar Sesión</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            @endauth
          </ul>
          <label for="menu-hamb" class="label-hamb"><img src="../Imagenes/img/menu2.png" alt="menu" class="hamburguesa"></label>
        </nav>
      </header>
