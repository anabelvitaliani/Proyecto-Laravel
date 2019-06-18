<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    @foreach ($comisiones['data'] as $comision)
      @if ($id==$comision['curso_id'])
Hola
      @endif
    @endforeach

  </body>
</html>
