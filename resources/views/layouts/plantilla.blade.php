<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC:700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet"  integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet"  integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="/css/footer.css" rel="stylesheet" type="text/css" />
    <link href="/css/menu.css" rel="stylesheet" type="text/css" />

    @yield('estilos')

    <title>@yield('title')</title>
  </head>
  <body>
    <br>
@include('partials.menu')
<div class="search-b">
  <form action="/search" method="GET">
  {{csrf_field()}}
  <input type="text" name="search" class="search">
  <button type="submit" class="btn" class="submit1">Buscar</button>
    </form>

</div>
@if (Auth::check())
  <h3 class="benve">
    Bienvenid@ {{Auth::user()->name}}!!
</h3>
@endif

<div class="contenedor">


@yield('contenido')

</div>
@include('partials.footer')
  </body>
</html>
