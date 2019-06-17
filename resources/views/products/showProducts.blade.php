@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/showProducts.css">
@endsection

@section('contenido')
<form class="" action="/product/create" method="post">
  <input type="submit" name="" value="Nuevo producto" class="submit">
</form>
  @foreach ($products as $product)
  <div class="product">
    <!--cuando tengamos imagen aca ponemos la/s imagen/es-->
    <strong>{{$product->nombre}}</strong>
    <p>{{$product->descripcion}}</p>
    @if ($product->descuento!=0)
    <p>Este producto tiene un descuento del %{{$product->descuento}}*100, aprovechalo!</p>
    @endif
    <p>{{$product->precio}}</p>
    <form class="" action="" method="post">
      <input type="submit" name="" value="Modificar producto" class="submit">
      <input type="submit" name="" value="Agregar al carrito" class="submit">
    </form>
  </div>
  @endforeach

@endsection
