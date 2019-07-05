@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/showProducts.css">
@endsection

@section('contenido')

@auth

  @if(auth::user()->admin)
    <a href="/product/create" id="nuevoproducto">Nuevo producto</a>
  @endif

@endauth
  @foreach ($products as $product)
  <div class="product">
  <img src="/storage/productsImg/{{$product->avatar}}" alt="{{Storage::url($product->nombre)}}" class="productimg">
  <br>
  <br>
    <strong>{{$product->nombre}}</strong>
    <br>
    <p>{{$product->descripcion}}</p>
    <p>{{isset($product->categorie) ? $product->categorie->name : ''}}</p>
    <br>
    @if ($product->descuento!=0)
    <p class="preciotachado">{{$product->precio}}</p>
    {{ ($product->precio/100)*(100-$product->descuento) }}
    @else
    <p>{{$product->precio}}</p>
    @endif

    @if ($product->stock)
    <p>Hay stock</p>
    @else
    <p>Sin stock</p>
    @endif
    <br>
    <br>
    <p>{{$product['id']}}</p>

@auth

  @if(auth::user()->admin)
    <a href="/product/edit/{{$product['id']}}">Modificar producto</a>
    <a href="/product/delete/{{$product['id']}}">Eliminar producto</a>
  @endif

@endauth
      <br>
      <br>
    <form class="" action="" method="post">
      <input type="submit" name="" value="Agregar al carrito" class="submit">
      <input type="submit" name="" value="Quitar del carrito" class="submit">
    </form>
    </div>
  @endforeach

@endsection
