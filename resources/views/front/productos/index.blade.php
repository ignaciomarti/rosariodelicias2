@extends('front.layouts.app')
@section('content')

<section class="container destacados">
    <h4 class="text-center mt-5 mb-2">Nuestros Productos</h4>
    <hr class="separador">
    <p class="text-center my-4"> Amamos lo que hacemos </p>
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
    <button class="main-btn mx-auto d-block mt-5">Siguiente página</button>
  </section>

@endsection