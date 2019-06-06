<form class="" action="/product/create" method="post">

<!--seguridad-->
  @csrf

  <div class="">
    <label for="nombre">Nombre:</label>
    <!--los name de los input tienen que ser iguales a los de la db-->
    <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $product->nombre) }}">
    @error ('field')

    @enderror
  </div>

  <div class="">
    <label for="descripcion">descripcioncion:</label>
    <input type="text" name="descripcion" value="{{ old('descripcion', $product->descripcion) }}">
  </div>

  <div class="">
    <label for="precio">precio:</label>
    <input type="text" name="precio" value="{{ old('precio', $product->precio) }}">
  </div>

  <div class="">
    <label for="descuento">Descuento:</label>
    <input type="text" name="descuento" value="{{ old('descuento', $product->descuento) }}">
  </div>
  <button type="submit">Guardar</button>

  <div class="">
    <label for="categoria">Categoria:</label>
    <!--los name de los input tienen que ser iguales a los de la db-->
    <input type="text" name="categoria" id="categoria" value="{{ old('categoria', $product->categoria) }}">
  </div>


</form>
