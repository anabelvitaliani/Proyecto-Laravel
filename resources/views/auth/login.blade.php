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
    <p>
      <label for="email" class="label">Email</label>
      <input id="email"type="email" name="email" value="{{old('email')}}">
    </p>
    <br>
    <p>
      <label for="password"  class="label">Contraseña</label>
      <input id="password"type="password" name="password" value="">

    </p>
    <br>
    <p>
      <input id="rec"type="radio" name="rec" value="r">
      <label for="rec">Recordarme</label>
    <p>
      <br>
      <a href="/home">¿Olvidaste tu contraseña?</a>
      <br>
      <br>
      <button class="boton"type="submit" name="button">INGRESAR</button>
      </p>
    <br>
    <br>
    </form>
  </div>
</main>

@endsection
