

<form class="" action="/product/create" method="post">

<!--$errors siempre existe-->
@if (count($errors)>0)
<div class="">
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>

</div>
@endif

<!--seguridad-->
  @csrf

  <div class="">
    <label for="nombre">Nombre:</label>
    <!--los name de los input tienen que ser iguales a los de la db-->
    <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
  </div>

  <div class="">
    <label for="descripcion">descripcion:</label>
    <input type="text" name="descripcion" value="{{ old('descripcion') }}">
  </div>

  <div class="">
    <label for="precio">precio:</label>
    <input type="text" name="precio" value="{{ old('precio') }}">
  </div>

  <div class="">
    <label for="descuento">Descuento:</label>
    <input type="text" name="descuento" value="{{ old('desc') }}">
  </div>

  <div class="">
    <label for="avatar">avatar:</label>
    <input type="text" name="avatar" value="{{ old('avatar') }}">
  </div>

  <button type="submit">Guardar</button>



</form>
