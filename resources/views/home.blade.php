@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/home.css">
@endsection
@section('contenido')
  <div class="contenedor">
       <main>
         <h2 class="bienvenido">
           ¡Bienvenido!
         </h2>
   <section>
     <br>
     <div id="slider">
     <figure>
       <img src="/Imagenes/img/pic01.jpg">
       <img src="/Imagenes/img/pic4.jpg">
       <img src="/Imagenes/img/pic11.jpg">
       <img src="/Imagenes/img/pic12.jpg">
       <img src="/Imagenes/img/pic01.jpg">
     </figure>
   </div>
   <br>
   <br>



   <div class="wrap">
     <div class="tarjeta-wrap">
       <div class="tarjeta">
         <div class="adelante card1"></div>
         <div class="atras">
           <p>Alfajores artesanales recubiertos con el más exquisito chocolate, rellenos con dulce de leche.
             <br>
           <strong>Nada más argentino que un alfajor!</strong></p>
         </div>
       </div>
     </div>
     <div class="tarjeta-wrap">
       <div class="tarjeta">
         <div class="adelante card2"></div>
         <div class="atras">
           <p>Delicioso bocadito de chocolate relleno con un suave y tentador dulce de leche.
             <br>
             <strong>Chocolate y dulce de leche en su máxima expresión.</strong>
           </p>
         </div>
       </div>
     </div>
     <div class="tarjeta-wrap">
       <div class="tarjeta">
         <div class="adelante card3"></div>
         <div class="atras">
           <p>Disfrutá del verdadero encanto del licor con estos bombones de Café Irlandés.
           <br>
           <strong>Exquisita combinación de whisky y café.</strong>
         </p>
         </div>
       </div>
     </div>
   </div>



   <div class="container-primary">
     <h3>- Como en Casa -</h3>
     <p>Con más de 100 años en el mercado del chocolate te ofrecemos la calidad de la pastelería profesional e internacional y los sabores sublimes del más rico y puro chocolate.<br>
        <strong><br> 100% artesanales</strong> asegurándote alimentos naturales sin agregados artificiales ni químicos.
        <br>
        <br>
        Desde sus tiempos pioneros en que producía en forma artesanal cinco kilogramos por noche, evolucionamos hasta lo que somos hoy: una empresa totalmente argentina cuyo nivel industrial es comparable a los más avanzados del mundo. <br>
        <br>

     <cite>CHOCOLATEMIA</cite> te invita a su viaje de placer... ¿te animás?
   </p>
     </div>
     </section>
  <br>
  <br>
  <br>


  </main>
  </div>




@endsection
