@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/showProducts.css">
@endsection

@section('contenido')
<h2>Felicidades!!</h2>
<div class="sucess">  
  <p>Ha finalizado exitosamente su compra!!</p>
  <br>
  <form action="/product" method="post">
    {{csrf_field()}}
    <button type="submit" class="btn-btn-check-f">Continuar Comprando</button>
  </form>
</div>

@endsection
