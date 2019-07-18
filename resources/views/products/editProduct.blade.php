@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/newProduct.css">
@endsection
@section('contenido')

<main class="main">
  <div class="n-product">
    <form class="form" action="/product/edit/{{$product->id}}" method="post" enctype="multipart/form-data">
      <h1 style="color:white">Editar producto</h1>

    <!--seguridad-->
      @csrf

      <div class="">
        <label class="label" for="nombre">Nombre</label>
        <!--los name de los input tienen que ser iguales a los de la db-->
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $product->nombre) }}">
        @error ('nombre')
          <mark class=""> {{ $message }} </mark>
        @enderror
      </div>

      <div class="">
        <label class="label" for="descripcion">Descripcioncion</label>
        <input type="text" name="descripcion" value="{{ old('descripcion', $product->descripcion) }}">
        @error ('descripcion')
          <mark class=""> {{ $message }} </mark>
        @enderror
      </div>

      <div class="">
        <label class="label, precio" for="precio">Precio</label>
        <input type="text"  id = "precio"name="precio" value="{{ old('precio', $product->precio) }}">
        @error ('precio')
          <mark class=""> {{ $message }} </mark>
        @enderror
      </div>

      <div class="">
        <label class="label, desc" for="descuento">Descuento</label>
        <input type="text"  id = "desc" name="descuento" value="{{ old('descuento', $product->descuento) }}">
        @error ('descuento')
          <mark class=""> {{ $message }} </mark>
        @enderror
      </div>

      <div class="">
              <label class="label" for="categoria">Categoria</label>
              <select class="categoria" name="categoria">
                @foreach ($categories as $category)
                  <option value="{{$category->id}}">{{ $category->name }}</option>
                @endforeach
              </select>
              @error ('categoria')
                <mark class=""> {{ $message }} </mark>
              @enderror
      </div>


      <div class="">
        <label class="label" for="avatar">Avatar</label>
        <input type="file" id="file" name="avatar" value="{{ old('avatar', $product->categorie->avatar)}}">
        @error ('avatar')
          <mark class=""> {{ $message }} </mark>
        @enderror
      </div>

      <button class="boton" type="submit">Guardar</button>

    </form>
  </div>
</main>
<script type="text/javascript" src="/js/products/newProduct.js"></script>
@endsection
