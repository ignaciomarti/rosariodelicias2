@extends('front.layouts.app')
@section('content')

<!--Carousel Wrapper-->
<section>
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <img class="d-block w-100" src="/storage/img-front/{{$datos->foto_slider_1}}"
            alt="First slide">
            <div class="contenedor-titulos">
            <h1 class="welcomeTitle">{{$datos->main_title_1 ? $datos->main_title_1 : ""}}</h1>
              <h3 class="welcome-title">{{$datos->main_subtitle_1 ? $datos->main_subtitle_1 : ""}}</h3>
            </div>
          <div class="mask rgba-black-light"></div>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="/storage/img-front/{{$datos->foto_slider_2}}"
            alt="Second slide">
            <div class="contenedor-titulos">
              <h1>{{$datos->main_title_2 ? $datos->main_title_2 : ""}}</h1>
              <h3>{{$datos->main_subtitle_2 ? $datos->main_subtitle_2 : ""}}</h3>
            </div>
          <div class="mask rgba-black-strong"></div>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="/storage/img-front/{{$datos->foto_slider_3}}"
            alt="Third slide">
            <div class="contenedor-titulos">
              <h1>{{$datos->main_title_3 ? $datos->main_title_3 : ""}}</h1>
              <h3>{{$datos->main_subtitle_3 ? $datos->main_subtitle_3 : ""}}</h3>
            </div>
          <div class="mask rgba-black-slight"></div>
        </div>
      </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->
</section>

<section class="container destacados">
  <h4 class="text-center mt-5 mb-2">{{$datos->destacados_title ? $datos->destacados_title : ""}}</h4>
  <hr class="separador">
  <p class="text-center my-4"> {{$datos->destacados_subtitle ? $datos->destacados_subtitle : ""}}</p>
  <div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-5">
      <div class="card">
        <img src="img/foto-welcome1.jpg" class="card-img-top" alt="Primer producto destacado">
        <div class="contenedor-descripcion-destacados">
          <p class="text-center">Producto 1</p>
          <span class="text-center d-block">Alfajores</span>
        </div>
      </div>
    </div>
    <div class="col mb-5">
      <div class="card">
        <img src="img/foto-welcome2.jpg" class="card-img-top" alt="Segundo producto destacado">
        <div class="contenedor-descripcion-destacados">
          <p class="text-center">Producto 2</p>
          <span class="text-center d-block">Alfajores</span>
        </div>
      </div>
    </div>
    <div class="col mb-5">
      <div class="card">
        <img src="img/foto-welcome3.jpg" class="card-img-top" alt="Tercer producto destacado">
        <div class="contenedor-descripcion-destacados">
          <p class="text-center">Producto 3</p>
          <span class="text-center d-block">Alfajores</span>
        </div>
      </div>
    </div>
    <div class="col mb-5 mb-sm-0">
      <div class="card">
        <img src="img/foto-welcome3.jpg" class="card-img-top" alt="Cuarto producto destacado">
        <div class="contenedor-descripcion-destacados">
          <p class="text-center">Producto 4</p>
          <span class="text-center d-block">Alfajores</span>
        </div>
      </div>
    </div>
    <div class="col mb-5 mb-sm-0">
      <div class="card">
        <img src="img/foto-welcome2.jpg" class="card-img-top" alt="Quinto producto destacado">
        <div class="contenedor-descripcion-destacados">
          <p class="text-center">Producto 5</p>
          <span class="text-center d-block">Alfajores</span>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="img/foto-welcome1.jpg" class="card-img-top" alt="Sexto producto destacado">
        <div class="contenedor-descripcion-destacados">
          <p class="text-center">Producto 6</p>
          <span class="text-center d-block">Alfajores</span>
        </div>
      </div>
    </div>
  </div>
  <button class="main-btn mx-auto d-block mt-5">Ver todos los productos</button>
</section>

<section class="testimoniales d-md-flex justify-content-between align-items-center my-5">
  <img src="/storage/img-front/{{$datos->foto_testimonial}}" alt="imágen de Florian Martí">
  <blockquote>{{$datos->testimonial ? $datos->testimonial : ""}}</blockquote>
</section>

<section class="diferencia">
  <h4 class="text-center mt-5 mb-2">{{$datos->title_diferencia ? $datos->title_diferencia : ""}}</h4>
  <hr class="separador">
  <p class="text-center my-4">{{$datos->subtitle_diferencia ? $datos->subtitle_diferencia : ""}}</p>

  <div class="container contenedor-cards-diferencia">
    <div class="contenedor-card-diferencia">
      <i class="fas fa-mug-hot"></i>
      <h4 class="mt-4 text-center">{{$datos->title_first_card_diferencia ? $datos->title_first_card_diferencia : ""}}</h4>
      <hr class="separador">
      <span class="text-center">{{$datos->subtitle_first_card_diferencia ? $datos->subtitle_first_card_diferencia : ""}}</span>
    </div>
    <div class="contenedor-card-diferencia">
      <i class="fas fa-cookie-bite"></i>
      <h4 class="mt-4 text-center">{{$datos->title_second_card_diferencia ? $datos->title_second_card_diferencia : ""}}</h4>
      <hr class="separador">
      <span class="text-center">{{$datos->subtitle_second_card_diferencia ? $datos->subtitle_second_card_diferencia : ""}}</span>
    </div>
    <div class="contenedor-card-diferencia">    
      <i class="far fa-heart"></i>
      <h4 class="mt-4 text-center">{{$datos->title_third_card_diferencia ? $datos->title_third_card_diferencia : ""}}</h4>
      <hr class="separador">
      <span class="text-center">{{$datos->subtitle_third_card_diferencia ? $datos->subtitle_third_card_diferencia : ""}}</span>
    </div>
  </div>
</section>

<section class="conoce">
  <div class="contenedor-conoce">
    <h2 class="text-center">{{$datos->title_section_clasics ? $datos->title_section_clasics : ""}}</h2>
    <p class="text-center container">{{$datos->subtitle_section_clasics ? $datos->subtitle_section_clasics : ""}}</p>
    <button class="main-btn mx-auto d-block mt-5">Ver todos los productos</button>
  </div>
</section>

<section class="location">
  <h4 class="text-center mt-5 mb-2">{{$datos->title_section_location ? $datos->title_section_location : ""}}</h4>
  <hr class="separador">
  <p class="text-center my-4">{{$datos->subtitle_section_location ? $datos->subtitle_section_location : ""}}</p>
  <div class="contenedor-mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d481728.80462972773!2d-99.42381643176068!3d19.390519022922902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce0026db097507%3A0x54061076265ee841!2zQ2l1ZGFkIGRlIE3DqXhpY28sIENETVgsIE3DqXhpY28!5e0!3m2!1ses-419!2sar!4v1590498688346!5m2!1ses-419!2sar" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <form action="/" method="POST">
      <div class="contenedor-formulario mb-auto d-md-flex d-none">
        <h4>CONTACTANOS</h4>
        <span>{{$datos->formulario_contacto ? $datos->formulario_contacto : ""}}</span>
        <input type="text" placeholder="Nombre" name="nombre">
        <input type="text" placeholder="E-mail" name="email">
        <textarea type="text" placeholder="Mensaje..." name="mensaje"></textarea>
        <button type="submit" class="m-0 py-4 px-5">Enviar</button>
      </div>
    </form>
  </div>
</section>
@endsection