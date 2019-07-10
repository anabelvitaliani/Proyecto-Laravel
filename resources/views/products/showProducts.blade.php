@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/showProducts.css">
@endsection

@section('contenido')
<h2>Lista de Productos</h2>
<br>
@auth

  @if(auth::user()->admin)
    <a href="/product/create" id="nuevoproducto">Nuevo producto</a>
    {{ $products->random() }}
  @endif
@endauth


    <br>
    <nav>
    <div class="">
      <form action="/search" method="GET">
      {{csrf_field()}}
      <input type="text" name="search" class="search">
      <button type="submit" class="btn" class="submit1">Buscar</button>
        </form>

    </div>
    </nav>

    <div id="paginacion">
      {!!$products->render()!!}

    </div>



  @foreach ($products as $product)
  <div class="product">
  <img src="/storage/productsImg/{{$product->avatar}}" class="productimg">
  <br>
  <br>
    <strong>{{$product->nombre}}</strong>
    <br>
    <p>{{$product->descripcion}}</p>
    <br>
    <p>{{isset($product->categorie) ? $product->categorie->name : ''}}</p>
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
    <p>{{$product['id']}}</p>

    @auth

      @if(auth::user()->admin)
        <a href="/product/edit/{{$product['id']}}">Modificar producto</a>
        <a href="/product/delete/{{$product['id']}}">Eliminar producto</a>
      @endif

    @endauth

      <br>
      <br>
      @if ($cart->list())
        <a href="/chechout"></a>
    <button class="btn btn-ssuccess">Carrito</button>
      @endif
      @if (!$cart->contains($product))
        <form action="/ToCart/{{$product['id']}}" method="post">
          {{csrf_field()}}
          <button type="submit" class="submit">Quitar del Carrito</button>
        </form>
      @endif
      @if (!$cart->contains($product))
        <form action="/addToCart/{{$product['id']}}" method="post">
          {{csrf_field()}}
          <button type="submit" class="submit">Agregar al Carrito</button>
        </form>
      @endif

    </div>
  @endforeach



@endsection
