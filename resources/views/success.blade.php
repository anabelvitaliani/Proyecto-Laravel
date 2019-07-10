extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/showProducts.css">
@endsection

@section('contenido')
<h1>Felicidades!!</h1>
<p>Ha finalizado exitosamente su compra!!</p>
<p>
  <a href="/products">Continuar comprando</a>
</p>
@endsection
