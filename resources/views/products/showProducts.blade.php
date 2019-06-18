@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/showProducts.css">
@endsection

@section('contenido')
<a href="/product/create">Nuevo producto</a>
  @foreach ($products as $product)
  <div class="product">
    <img src="{{Storage::url($product->avatar)}}" alt="">
    <strong>{{$product->nombre}}</strong>
    <p>{{$product->descripcion}}</p>
    @if ($product->descuento!=0)
    <p>Este producto tiene un descuento del %{{$product->descuento}}*100, aprovechalo!</p>
    @endif
    <p>{{$product->precio}}</p>
    <a href="#">Modificar producto</a>
    <form class="" action="" method="post">
      <input type="submit" name="" value="Agregar al carrito" class="submit">
    </form>
  </div>
  @endforeach

@endsection
