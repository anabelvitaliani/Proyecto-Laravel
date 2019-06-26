@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/newProduct.css">
@endsection
@section('contenido')

<form class="" action="/product/create" method="post">

<!--seguridad-->
  @csrf

  <div class="nombre">
    <label for="nombre">Nombre:</label>
    <!--los name de los input tienen que ser iguales a los de la db-->
    <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $product->nombre) }}">
    @error ('nombre')
      <div class=""> {{ $message }} </div>
    @enderror
  </div>

  <div class="descripcion">
    <label for="descripcion">Descripcioncion:</label>
    <input type="text" name="descripcion" value="{{ old('descripcion', $product->descripcion) }}">
    @error ('descripcion')
      <div class=""> {{ $message }} </div>
    @enderror
  </div>

  <div class="precio">
    <label for="precio">Precio:</label>
    <input type="text" name="precio" value="{{ old('precio', $product->precio) }}">
    @error ('precio')
      <div class=""> {{ $message }} </div>
    @enderror
  </div>

  <div class="descuento">
    <label for="descuento">Descuento:</label>
    <input type="text" name="descuento" value="{{ old('descuento', $product->descuento) }}">
    @error ('descuento')
      <div class=""> {{ $message }} </div>
    @enderror
  </div>

  <div class="categoria">
    <label for="categoria">Categoria:</label>
    <!--los name de los input tienen que ser iguales a los de la db-->
    <input type="text" name="categoria" id="categoria" value="{{ old('categoria', $product->categorie->name) }}">
    @error ('categoria')
      <div class=""> {{ $message }} </div>
    @enderror
  </div>

  <button type="submit">Guardar</button>

</form>
@endsection
