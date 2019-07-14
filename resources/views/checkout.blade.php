@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/showProducts.css">
@endsection

@section('contenido')
<h2>Mi Carrito</h2>
<div class="checkout">
  <ul>
      <?php
    $total = 0;
    ?>
    @foreach ($cart->list() as $product)
      <li>
        {{$product->nombre}}: ${{$product->precio}}
      </li>
        <?php
      $total += $product->precio;
    ?>
    @endforeach
  </ul>
  <br>
  <p>Total: ${{$total}}</p>
  <br>
  @if (Auth::check())
    <form action="/success" method="post">
      {{csrf_field()}}
      <button type="submit" class="btn-btn-check-f">Finalizar Compra</button>
    </form>
    <form action="/deleteToCart/{{$product->id}}" method="post">
    {{csrf_field()}}
        <button type="submit" class="btn-btn-check-q">Eliminar del Carrito</button>
      </form>
  @else
    <p style="color:red">Inicia sesión para finalizar la compra</p>
  @endif

</div>
@endsection
