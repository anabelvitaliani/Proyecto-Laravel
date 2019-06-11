@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/newProduct.css">
@endsection
@section('contenido')
<main>
<div class="newProduct">
  <form class="form-newProduct" action="/product/create" method="post">
    <h1 style="color:white">Nuevo Producto</h1>
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
      <label class="label-newProduct" for="nombre">Nombre:</label>
      <!--los name de los input tienen que ser iguales a los de la db-->
      <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
    </div>

    <div class="">
      <label class="label-newProduct" for="descripcion">Descripcion:</label>
      <input type="text" name="descripcion" value="{{ old('descripcion') }}">
    </div>

    <div class="">
      <label class="label-newProduct" for="precio">Precio:</label>
      <input type="text" name="precio" value="{{ old('precio') }}">
    </div>

    <div class="">
      <label class="label-newProduct" for="descuento">Descuento:</label>
      <input type="text" name="descuento" value="{{ old('desc') }}">
    </div>

    <div class="">
      <label class="label-newProduct" for="avatar">Avatar:</label>
      <input type="file" name="avatar" value="{{ old('avatar') }}">
    </div>
    <div class="">
      <label class="label-newProduct" for="categoria">Categoria:</label>
      <!--los name de los input tienen que ser iguales a los de la db-->
      <input type="text" name="categoria" id="categoria" value="{{ old('categoria') }}">
    </div>
    <button class="boton" type="submit">Guardar</button>



  </form>
</div>
</main>
@endsection
