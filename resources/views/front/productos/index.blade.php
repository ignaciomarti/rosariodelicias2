@extends('front.layouts.app')
@section('content')

<section class="container destacados">
    <h4 class="text-center mt-5 mb-2">Nuestros Productos</h4>
    <hr class="separador">
    <p class="text-center my-4"> Amamos lo que hacemos </p>
    <div class="row row-cols-1 row-cols-md-3">
      @forelse ($productos as $producto)
      <div class="col mb-5">
        <div class="card">
          <img src="/storage/product_poster/{{$producto->poster}}" class="card-img-top" alt="Primer producto destacado">
          <div class="contenedor-descripcion-destacados">
            <p class="text-center">{{$producto->titulo}}</p>
            <span class="text-center d-block">{{$producto->categoria->nombre_categoria}}</span>
          </div>
        </div>
      </div> 
      @empty
          <p class="text-center">No hay productos cargados. Por favor, intente nuevamente más tarde.</p>
      @endforelse
    </div>
    <div class="d-flex justify-content-center">
      {{ $productos->links() }}
    </div>
  </section>

@endsection