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
@if($cart->list())
    @foreach ($cart->list() as $product)

      <li id="li-{{$product->id}}">
        {{$product->nombre}}: ${{$product->precio}}
        <form action="/deleteToCart/{{$product->id}}" method="post">
        {{csrf_field()}}
            <button type="button" value="{{$product->id}}" precio="{{$product->precio}}"class="btn-btn-check-q">Eliminar del Carrito</button>
        </form>
      </li>
    <?php
      $total += $product->precio;
    ?>
    @endforeach
  </ul>
  <br>
  <p>Total: $<span class="total">{{$total}}</span></p>
  <br>

  @if (Auth::check())
    <form action="/success" method="post">
      {{csrf_field()}}
      <button type="submit" class="btn-btn-check-f">Finalizar Compra</button>
    </form>

  @else
    <p style="color:red">Inicia sesión para finalizar la compra</p>
  @endif
@else
  <p class="vacio">El carrito está vacío</p>
  <form class="" action="/product" method="post">
    {{csrf_field()}}
    <button type="submit" class="btn" class="submit1">Ver productos</button>
  </form>
@endif
</div>
<script type="text/javascript" src="js/checkout.js"></script>
@endsection
