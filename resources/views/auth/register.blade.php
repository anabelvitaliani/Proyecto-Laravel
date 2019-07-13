@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/register.css">
@endsection
@section('contenido')
     <div class="contenedor">

    <main class="main">
      <div class="form-register">
    <form class="register" action="/register" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1 style="color:white">Registrate</h1>

    <div class="div">
      <label for="name" class="label-registro">Nombre</label>
      <input id="name" type="text" name="name" value="{{old('name')}}" placeholder="Ingrese su nombre *">
    </div>

    <div class = "div">
    <label for="surname" class="label-registro">Apellido</label>
    <input id="surname"type="text" name="surname" value="{{old('surname')}}" placeholder="Ingrese su apellido *">
    </div>

    <div class = "div">
    <label for="email" class="label-registro">Email</label>
    <input id="email" type="email" name="email" value="{{old('email')}}"placeholder="nombre@nombre.com *">
    </div>

    <div class = "div">
    <label for="fecha" class="label-registro">Fecha de nacimiento</label>
    <input id="fecha"type="date" name="fecha" value="{{old('fecha')}}">
    </div>

    <div class = "div">
    <label for="password" class="label-registro">Contraseña</label>
    <input id="password" type="password" name="password" value="" placeholder="Contraseña *">

  </div>
    <div class = "div">
    <label for="password_confirmation" class="label-registro">Confirmar contraseña</label>
    <input id="password_confirmation" type="password" name="password_confirmation" value="" placeholder="Confirme contraseña *">

  </div>
    <div class = "div">
      <label for="avatar" class="label-registro">Foto de perfil</label>
      <input type="file" name="avatar" value="">
    </div>

    <div class = "div">
    <label for="telefono" class="label-registro">Teléfono</label>
    <input id="telefono" type="text" name="telefono" value="{{old('telefono')}}" placeholder="Número de teléfono *">
  </div>

    <div class = "div">
    <br>
    <label class="com"for="com" class="label-registro" id="comentarios">COMENTARIOS</label>
    <br>
    <textarea class="coment" id="com" name="com" rows="8" cols="80"></textarea>
  </div>

    <div class="div">
    <button class="boton"type="submit" name="button" value="Enviar Datos">ENVIAR</button>
    <button class="resetear"type="reset" name="button">REINICIAR</button>
  </div>

    </div>
    </form>
      </div>
    </main>

  </div>

<script type class = "div"="text/javascript" src="/js/register.js"></script>
@endsection
