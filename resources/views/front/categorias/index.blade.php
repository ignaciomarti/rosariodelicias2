@extends('front.layouts.app')
@section('content')
<section class="container destacados">
    <h4 class="text-center mt-5 mb-2">Categorías</h4>
    <hr class="separador">
    <p class="text-center my-4">Encuentra nuestros sabores.</p>
    
    <div class="row row-cols-1 row-cols-md-3">
      @forelse ($categorias as $categoria)
      <a href="{{Route('categorias.show', $categoria->id)}}">
        <div class="col mb-5">
          <div class="card">

          <img src="/storage/categoria_poster/{{$categoria->poster}}" height="200vh" alt="Primer imágen de la categoria">
            <div class="contenedor-descripcion-destacados">
              <p class="text-center">{{$categoria->nombre_categoria}}</p>
            </div>
          </div>
        </div>
      </a>
      @empty
          No hay categorías cargadas. Inténtelo nuevamente más tarde.
      @endforelse

    </div>
    <a href="productos"><button class="main-btn mx-auto d-block mt-5">Ver todos los Productos</button></a>
  </section>
@endsection