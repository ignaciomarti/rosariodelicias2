@extends('front.layouts.app')
@section('content')
<section class="container destacados">
    <h4 class="text-center mt-5 mb-2">Categorías</h4>
    <hr class="separador">
    <p class="text-center my-4">Lorem ipsum dolor sit.</p>
    <div class="row row-cols-1 row-cols-md-3">
      <div class="col mb-5">
        <div class="card">
          <img src="img/foto-welcome1.jpg" class="card-img-top" alt="Primer Categoría destacado">
          <div class="contenedor-descripcion-destacados">
            <p class="text-center">Categoría 1</p>
            <span class="text-center d-block">Alfajores</span>
          </div>
        </div>
      </div>
      <div class="col mb-5">
        <div class="card">
          <img src="img/foto-welcome2.jpg" class="card-img-top" alt="Segundo Categoría destacado">
          <div class="contenedor-descripcion-destacados">
            <p class="text-center">Categoría 2</p>
            <span class="text-center d-block">Alfajores</span>
          </div>
        </div>
      </div>
      <div class="col mb-5">
        <div class="card">
          <img src="img/foto-welcome3.jpg" class="card-img-top" alt="Tercer Categoría destacado">
          <div class="contenedor-descripcion-destacados">
            <p class="text-center">Categoría 3</p>
            <span class="text-center d-block">Alfajores</span>
          </div>
        </div>
      </div>
      <div class="col mb-5 mb-sm-0">
        <div class="card">
          <img src="img/foto-welcome3.jpg" class="card-img-top" alt="Cuarto Categoría destacado">
          <div class="contenedor-descripcion-destacados">
            <p class="text-center">Categoría 4</p>
            <span class="text-center d-block">Alfajores</span>
          </div>
        </div>
      </div>
      <div class="col mb-5 mb-sm-0">
        <div class="card">
          <img src="img/foto-welcome2.jpg" class="card-img-top" alt="Quinto Categoría destacado">
          <div class="contenedor-descripcion-destacados">
            <p class="text-center">Categoría 5</p>
            <span class="text-center d-block">Alfajores</span>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/foto-welcome1.jpg" class="card-img-top" alt="Sexto Categoría destacado">
          <div class="contenedor-descripcion-destacados">
            <p class="text-center">Categoría 6</p>
            <span class="text-center d-block">Alfajores</span>
          </div>
        </div>
      </div>
    </div>
    <a href="productos"><button class="main-btn mx-auto d-block mt-5">Ver todos los Productos</button></a>
  </section>
@endsection