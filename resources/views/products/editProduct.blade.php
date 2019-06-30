@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/newProduct.css">
@endsection
@section('contenido')

<main class="main">
  <div class="n-product">
    <form class="form" action="/product/edit/{id}" method="post">
      <h1 style="color:white">Editar producto</h1>

    <!--seguridad-->
      @csrf

      <div class="">
        <label class="label" for="nombre">Nombre</label>
        <!--los name de los input tienen que ser iguales a los de la db-->
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $product->nombre) }}">
        @error ('nombre')
          <div class=""> {{ $message }} </div>
        @enderror
      </div>

      <div class="">
        <label class="label" for="descripcion">Descripcioncion</label>
        <input type="text" name="descripcion" value="{{ old('descripcion', $product->descripcion) }}">
        @error ('descripcion')
          <div class=""> {{ $message }} </div>
        @enderror
      </div>

      <div class="">
        <label class="label" for="precio">Precio</label>
        <input type="text" name="precio" value="{{ old('precio', $product->precio) }}">
        @error ('precio')
          <div class=""> {{ $message }} </div>
        @enderror
      </div>

      <div class="">
        <label class="label" for="descuento">Descuento</label>
        <input type="text" name="descuento" value="{{ old('descuento', $product->descuento) }}">
        @error ('descuento')
          <div class=""> {{ $message }} </div>
        @enderror
      </div>

      <div class="">
        <label class="label" for="categoria">Categoria</label>
        <!--los name de los input tienen que ser iguales a los de la db-->
        <input type="text" name="categoria" id="categoria" value="{{ old('categoria', $product->categorie->name) }}">
        @error ('categoria')
          <div class=""> {{ $message }} </div>
        @enderror
      </div>

      <div class="">
        <label class="label" for="avatar">Avatar</label>
        <input type="file" name="avatar" value="{{ old('avatar', $product->categorie->avatar)}}">
        @error ('avatar')
          <div class=""> {{ $message }} </div>
        @enderror
      </div>

      <button class="boton" type="submit">Guardar</button>

    </form>
  </div>
</main>
@endsection
