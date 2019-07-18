@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/home.css">
@endsection

@section('contenido')
<div class="contenedor-succes">
<h2 class="finish1">Felicidades!!</h2>

<div class="sucess">
  <p class="finish">Ha finalizado exitosamente su compra!!</p>
  <br>
  <form action="/product" method="post">
    {{csrf_field()}}
    <button type="submit" class="btn-btn-check-s">Continuar Comprando</button>
  </form>
  <form action="/" method="get">
    {{csrf_field()}}
    <button type="submit" class="btn-btn-check-s">Ir al Inicio</button>
  </form>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <div class="tarjeta-wrap">
    <div class="tarjeta">
      <div class="adelante card4"></div>
      <div class="atras">
        <div class="texto">
        <p>PLACERES PARA COMPARTIR
        <br>
        <strong></strong>
        </p>
        </div>
        <div class="button">
        <a href="/product" target="_blank" >
        <i class="fas fa-heart"></i> MAS
        </a>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>


@endsection
