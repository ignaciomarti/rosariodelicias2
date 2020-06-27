@extends('front.layouts.app')
@section('content')

<main>
    <!-- Page Content -->
    <div class="container destacados">

            <nav class="my-2" aria-label="breadcrumb">
                <ol class="breadcrumb producto-bread">
                    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="/categoria/{{$producto->categoria->id}}">{{$producto->categoria->nombre_categoria}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$producto->titulo}}</li>
                </ol>
            </nav>

            <h2 class="my-4 producto-titulo main-color p-2 text-center">{{$producto->titulo}}</h2>
            <hr class="separador">
            <p class="text-center main-color">{{$producto->descripcion}}</p>
            <div class="row">

                <div class="col-lg-3 order-1 order-md-1">
                    <h2 class="mb-4 producto-titulo p-2 main-color text-center">Productos similares</h2>
                    <div class="list-group lista-producto">
                        @forelse ($producto->categoria->productos as $productos)
                            <a href="/producto/{{$productos->id}}" class="list-group-item">{{$productos->titulo}}</a>
                        @empty
                            No hay productos similares
                        @endforelse
                    </div>
                </div>
                <!-- /.col-lg-3 -->

                <div class="col-lg-9 order-0 order-md-0">
            <!--product-card-->
                    <div class="product-card mb-2">
                        <div class="card-header">

                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    @if ($producto->poster2)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    @endif
                                    @if ($producto->poster3)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    @endif
                                    @if ($producto->poster4)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    @endif
                                    @if ($producto->poster5)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                    @endif
                                </ol>
                                <div class="carousel-inner">
                                    
                                <div class="carousel-item active">
                                    <img class="d-block w-100"  height="500vh" src="{{$producto->poster ? '/storage/product_poster/' . $producto->poster : 'http://placehold.it/900x400'}}" alt="Imágen del Producto">
                                </div>
                                
                                @if ($producto->poster2)
                                    <div class="carousel-item ">
                                        <img class="d-block w-100" src="/storage/product_poster/{{$producto->poster2}}" height="500vh" alt="Imágen del Producto">
                                    </div>
                                @endif
                                @if ($producto->poster3)
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="/storage/product_poster/{{$producto->poster3}}"  height="500vh" alt="Imágen del Producto">
                                    </div>
                                @endif
                                @if ($producto->poster4)
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="/storage/product_poster/{{$producto->poster4}}"  height="500vh" alt="Imágen del Producto">
                                    </div>
                                @endif
                                @if ($producto->poster5)
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="/storage/product_poster/{{$producto->poster5}}"  height="500vh" alt="Imágen del Producto">
                                    </div>
                                @endif
                                </div>

                                @if ($producto->poster2 || $producto->poster3 || $producto->poster4 || $producto->poster5)
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Anterior</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Siguiente</span>
                                    </a>
                                @endif
                              </div>
                        </div>

                        </div>
                    <!-- /.card -->


                </div>
                <!-- /.col-lg-9 -->

    </div>

    </div>
    <!-- /.container -->
    </main>
@endsection
