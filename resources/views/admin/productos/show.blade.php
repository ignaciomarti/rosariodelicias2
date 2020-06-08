@extends('adminlte::page')

@section('title', 'Rosario Delicias - Productos')

@section('content_header')
    <h1>Ver Producto</h1>
@stop

@section('content')
@if (session('status'))
    <div class="alert alert-danger@">
        {{ session('status') }}
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Producto') }}</div>

                <div class="card-body">
                    @if (isset($producto))
                        <span>Usted eligió el producto número {{$producto->id}} y estos son sus datos:</span>
                        <p><strong>Título: </strong>{{$producto->titulo}}</p>

                        <strong>Imágen/es: </strong>
                        @if (isset($producto->poster))
                            <img src="/storage/product_poster/{{$producto->poster}}" width="100%" alt="Imágen del producto">
                        @else
                            No se ha encontrado una imágen para este producto
                        @endif
                        @if (isset($producto->poster2))
                            <img src="/storage/product_poster/{{$producto->poster2}}" width="100%" alt="Segunda imágen del producto">
                        @endif
                        @if (isset($producto->poster3))
                            <img src="/storage/product_poster/{{$producto->poster3}}" width="100%" alt="Tercera imágen del producto">
                        @endif
                        @if (isset($producto->poster4))
                            <img src="/storage/product_poster/{{$producto->poster4}}" width="100%" alt="Cuarta imágen del producto">
                        @endif
                        @if (isset($producto->poster5))
                            <img src="/storage/product_poster/{{$producto->poster5}}" width="100%" alt="Quinta imágen del producto">
                        @endif
                        <p><strong>Categoría: </strong>{{$producto->categoria->nombre_categoria}}</p>

                        <p><strong>Descripción: </strong>{{$producto->descripcion}}</p>

                        <p><strong>Precio: </strong>${{$producto->precio}}</p>

                        <p><strong>Descuento: </strong> @if (isset($producto->descuento)) {{$producto->descuento}} @else "Este producto no está en promoción" @endif</p>

                        <p><strong>Es destacado:</strong> {{$producto->es_destacado == 0? 'No':'Si'}} </p>
                        {{--  <form action="" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$producto->id}}">
                            <button class="btn btn-danger" type="submit" id="buttonEliminar" disabled>Agregar al carrito</button>
                        </form>
                          @if (Auth::user()->tipo_de_usuario_id == 2)
                            <a href="/producto/admin/{{$producto->id}}">Ver como administrador</a>
                        @endif  --}}
                    @else
                    <p>No se encontró el producto número {{$id}}. Por favor, elija un producto del <a href="/productos">listado de productos</a>.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
