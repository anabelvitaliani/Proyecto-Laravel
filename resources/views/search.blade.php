@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/showProducts.css">
@endsection

@section('contenido')
<h2>Resultados Encontrados</h2>

<!--<div id="paginacion">
  {!!$products->render()!!}

</div>


@foreach ($products as $product)
<div class="product">
<img src="/storage/productsImg/{{$product->avatar}}" class="productimg" width="400">
<br>
<br>
<strong>{{$product->nombre}}</strong>
<br>
<br>
<p>{{$product->descripcion}}</p>
<br>
<p>{{isset($product->categorie) ? $product->categorie->name : ''}}</p>
@if ($product->descuento!=0)
<p class="preciotachado">{{$product->precio}}</p>
<strong>{{ ($product->precio/100)*(100-$product->descuento) }}</strong>
@else
<p><strong>{{$product->precio}}</strong></p>
@endif


  @auth
    @if(auth::user()->admin)
    @if ($product->stock)
    <p>Hay stock</p>
    @else
    <p>Sin stock</p>
    @endif

    <a href="/product/edit/{{$product['id']}}">Modificar producto</a>
    <a href="/product/delete/{{$product['id']}}">Eliminar producto</a>
  @endif

@endauth

  <br>
  <br>



  @if (!$cart->contains($product))
    <form action="/addToCart/{{$product->id}}" method="post">
      {{ csrf_field() }}
      <button type="submit" class="submit">Agregar al Carrito</button>
    </form>
  @endif
  @if ($cart->list())
    <form action="/checkout" method="post">
      {{ csrf_field() }}
      <button type="submit" class="btn-btn-check">Mis Compras</button>
        </form>
  @endif
</div>
@endforeach-->




<ul>
  @foreach ($products as $product)
    <li>
      <a href="/product/{{$product->id}}">
        {{$product->nombre}}
      </a>
    </li>
  @endforeach
</ul>
@endsection
