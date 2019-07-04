@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/login.css">
@endsection
@section('contenido')
<main class="main">
  <div class="form-login">
    <form class="login" action="/login" method="post">
      <h1 style="color:white">Logueate</h1>
        {{ csrf_field() }}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
          <br>
          <br>
    <div>
      <label for="email" class="label">Email</label>
      <input id="email"type="email" name="email" value="{{old('email')}}">
    </div>
    <br>
    <div>
      <label for="password"  class="label">Contraseña</label>
      <input id="password"type="password" name="password" value="">

    </div>
    <br>
    <div>
      <input id="rec"type="radio" name="rec" value="r">
      <label for="rec">Recordarme</label>
    </div>
      <br>
      <a href="/home">¿Olvidaste tu contraseña?</a>
      <br>
      <br>
      <button class="boton"type="submit" name="button">INGRESAR</button>
    <br>
    <br>
    </form>
  </div>
</main>
<script type="text/javascript" src="/js/login/login.js"></script>
@endsection
