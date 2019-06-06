@extends('layouts.plantilla')
@section('title',"Chocolatemia")
@section('estilos')
<link rel="stylesheet" href="/css/preguntas.css">
@endsection
@section('contenido')

    <main class='preguntas'>
     <br>
     <br>
     <h1>PREGUNTAS FRECUENTES</h1>
     <br>
     <article class="pregunta">
       <b>Hola! ¿Hacen envíos?</b>
       <p>Hacemos envíos a CABA y Gran Buenos Aires.</p>
     </article>
     <article class="pregunta">
       <b>¿Venden chocolates sin T.A.C.C?</b>
       <p>¡Hola! Tenemos una sección apta para celíacos. Podés verla en nuestra página!</p>
     </article>
     <article class="pregunta">
       <b>¿Qué gustos tienen?</b>
       <p>Tenemos chocolate blaco, amargo, semiamargo, con frutos secos (nuez, maní, almendras o combinado), rellenos de dulce de leche, frambuesa, menta, ¡entre muchos otros!</p>
     </article>
     <article class="pregunta">
       <b>¿Qué costo tienen los envíos?</b>
       <p>Si es a una dirección de CABA el envío es sin costo. Si no, se suma un 5% al valor de la compra.</p>
     </article>
     <article class="pregunta">
       <b>¿Cuáles son los puntos para retirar las compras?</b>
       <p>Podés retirar tu compra en nuestros locales (Ugarte 2732, Belgrano o Quintino Bocayúa 1542, Boedo) de 8 a 20hs.</p>
     </article>
     <article class="pregunta">
       <b>¿Hacen tortas y postres?</b>
       <p>Hacemos reposteríá únicamente a pedido.</p>
     </article>
     <article class="pregunta">
       <b>Con cuánta anticipación tengo que realizar el pedido?</b>
       <p>Los pedidos se retiran 48hs hábiles después de realizados en caso de ser chocolates que estén en nuestra página. Para otros sabores, formas o repostería se requieren 96hs hábiles. </p>
     </article>
     <article class="pregunta">
       <b>Puedo reservar una compra para retirarlo más tarde en el local?</b>
       <p>No hacemos reservas, las compras son por orden de llegada. Si sabés qué vas a necesitar con anticipación podés hacer un pedido con 48hs hábiles de anticipación.</p>
     </article>
 </main>

@endsection
