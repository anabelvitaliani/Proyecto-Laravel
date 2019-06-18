<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    @foreach ($cursos['data'] as $curso)
      {{$curso['curso']}}
      <br>
      {{$curso['descripcion']}}
      <a href="/vercomisiones/{{$curso['id']}}">Ver comisiones</a>
    @endforeach

  </body>
</html>
