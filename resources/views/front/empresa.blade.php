@extends('front.layouts.app')
@section('content')
<section>
<div class="contenedor-principal-nosotros">
<h1 class="text-center main-color">Nosotros</h1>
<hr class="separador">
    <div class="container contenedor-nosotros d-block d-md-flex justify-content-between align-items-center mt-5">
        <img src="img/foto-welcome1.jpg" class="col-md-6 col-12 d-block align-center d-md-inline" alt="imágen quiénes somos">
        <div class="text-justify col-md-6 contenedor-texto-nosotros">
            <h4 class="main-color">Lorem, ipsum dolor.</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab blanditiis ipsum eius? Ea quia nemo velit cum? Voluptatem harum perspiciatis inventore culpa ducimus assumenda quaerat explicabo, impedit et dolorem vero.</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque impedit cum aliquam ab est! Eum fugit non ipsa quia quis porro aliquam, exercitationem explicabo dolor necessitatibus aut a. Modi voluptate possimus odit deleniti, obcaecati eum explicabo facere quaerat, vero dolor nesciunt officia velit dolore temporibus odio aliquid voluptatibus cumque dolores.</p>
        </div>
    </div>

    <div class="container contenedor-nosotros d-md-flex justify-content-between align-items-center mt-5">
        <img src="img/foto-welcome2.jpg" class="col-md-6 col-12 d-block align-center d-md-inline order-2" alt="imágen quiénes somos">
        <div class="text-justify col-md-6 contenedor-texto-nosotros">
            <h4 class="main-color">Lorem, ipsum dolor.</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab blanditiis ipsum eius? Ea quia nemo velit cum? Voluptatem harum perspiciatis inventore culpa ducimus assumenda quaerat explicabo, impedit et dolorem vero.</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque impedit cum aliquam ab est! Eum fugit non ipsa quia quis porro aliquam, exercitationem explicabo dolor necessitatibus aut a. Modi voluptate possimus odit deleniti, obcaecati eum explicabo facere quaerat, vero dolor nesciunt officia velit dolore temporibus odio aliquid voluptatibus cumque dolores.</p>
        </div>
    </div>
    <h3 class="text-center main-color">Si tenés alguna duda sobre nuestros productos <a href="contacto">¡Contactanos!</a></h3>
</div>

</section>
@endsection