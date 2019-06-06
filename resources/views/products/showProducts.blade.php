@extends('layouts.plantilla')
@section('title',"Chocolatemia")
<!--@section('estilos')
<link rel="stylesheet" href="/css/home.css">
@endsection-->

@section('contenido')
<div class="">
  @foreach ($products as $product)
    {{$product->nombre}}

  @endforeach
</div>
@endsection
