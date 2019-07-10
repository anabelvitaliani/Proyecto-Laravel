@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/showProducts.css">
@endsection

@section('contenido')
<h1>Carrito</h1>
<ul>
@php
  $total = 0;
  @endphp
  @foreach ($cart->list() as $product)
    <li>
      {{$product->name}}: ${{$product->price}}
    </li>
  @php
    $total += $product->price;
  @endphp
  @endforeach
</ul>
<p>Total: ${{$total}}</p>
@if (Auth::check())
  <form action="checkout" method="post">
    {{csrf_field()}}
    <button type="submit">Finalizar Compra</button>
  </form>
@else
  <p style="color:red">Inicia sesión para finalizar la compra</p>
@endif

@endsection
