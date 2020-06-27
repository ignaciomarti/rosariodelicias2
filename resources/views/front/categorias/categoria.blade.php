@extends('front.layouts.app')
@section('content')
<main>
<div class="container destacados">



    <nav class="my-2" aria-label="breadcrumb">
        <ol class="breadcrumb categoria-bread">
        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
        <li class="breadcrumb-item"><a href="#">Categorias</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$categoria->nombre_categoria}}</li>
        </ol>
    </nav>

        <h2 class="text-center mt-5 mb-2 main-color">{{$categoria->nombre_categoria}}</h2>
        <hr class="separador">
        <p class="text-center my-4 main-color">Encuentra nuestros sabores.</p>

        <div class="row row-cols-1 row-cols-md-3">
            @forelse ($categoria->productos as $producto)
            <a href="{{Route('productos.show', $producto->id)}}">
              <div class="col mb-5">
                <div class="card_container">
      
                <img src="/storage/product_poster/{{$producto->poster}}" width="100%" alt="Imagen del producto">
                  <div class="card_description">
                    <p class="text-center">{{$producto->titulo}}</p>
                  </div>
                </div>
              </div>
            </a>
            @empty
                No hay categorías cargadas. Inténtelo nuevamente más tarde.
            @endforelse
      
          </div>
          

    </div>
    <!-- /.container -->

</main>
@endsection
