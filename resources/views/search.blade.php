extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/showProducts.css">
@endsection

@section('contenido')
<h2>Resultados Encontrados</h2>
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
