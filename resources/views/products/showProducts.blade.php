@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/showProducts.css">
@endsection

@section('contenido')
<a href="/product/create" id="nuevoproducto">Nuevo producto</a>
  @foreach ($products as $product)
  <div class="product">
  <img src="/storage/productsImg/{{$product->avatar}}" alt="{{Storage::url($product->nombre)}}" class="productimg">
    <strong>{{$product->nombre}}</strong>
    <p>{{$product->descripcion}}</p>
    <p>{{isset($product->categorie) ? $product->categorie->name : ''}}</p>
    @if ($product->descuento!=0)
    <p class="preciotachado">{{$product->precio}}</p>
    {{ ($product->precio/100)*(100-$product->descuento) }}
    @else
    <p>{{$product->precio}}</p>
    @endif
    <a href="/product/edit/{{$product['id']}}">Modificar producto</a>
    <form class="" action="" method="post">
      <input type="submit" name="" value="Agregar al carrito" class="submit">
    </form>
  </div>
  @endforeach

@endsection
