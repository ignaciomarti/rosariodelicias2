@extends('adminlte::page')

@section('title', 'Rosario Delicias - Productos')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Listado de Productos') }}</div>

                <div class="card-body">
                    <form action="{{route('productos.update', $producto)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="titulo" class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>

                            <div class="col-md-6">
                                <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{$producto->titulo}}" required autocomplete="titulo" autofocus>

                                @error('titulo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <textarea id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" required autocomplete="descripcion" autofocus>{{$producto->descripcion}}</textarea>
                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="categoria_id" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>

                            <div class="col-md-6">
                                <select id="categoria_id" type="date" class="form-control @error('categoria_id') is-invalid @enderror" name="categoria_id" autofocus>

                                    <option value="" disabled>Seleccione una Categoría...</option>

                                    @foreach ($categorias as $categoria)
                                        @if ($producto->categoria_id == $categoria->id)
                                            <option value="{{$categoria->id}}" selected>{{$categoria->nombre_categoria}}</option>
                                        @else
                                        <option value="{{$categoria->id}}">{{$categoria->nombre_categoria}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('categoria_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="precio" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                            <div class="col-md-6">
                                <input id="precio" type="number" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{$producto->precio}}" required autocomplete="precio" autofocus>
                                @error('precio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descuento" class="col-md-4 col-form-label text-md-right">{{ __('Descuento') }}</label>

                            <div class="col-md-6">
                                <input id="descuento" type="number" class="form-control @error('descuento') is-invalid @enderror" name="descuento" value="{{$producto->descuento}}" autocomplete="descuento" autofocus>
                                @error('descuento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="es_destacado" class="col-md-4 col-form-label text-md-right">{{ __('Agregar a productos destacados?') }}</label>

                            <div class="col-md-6">
                                <select id="es_destacado" type="date" required class="form-control @error('es_destacado') is-invalid @enderror" name="es_destacado" autofocus>
                                        @if ($producto->es_destacado == 1)
                                            <option value="0">No</option>
                                            <option value="1" selected>Si</option>
                                        @else
                                            <option value="0" selected>No</option>
                                            <option value="1">Si</option>                                        
                                        @endif
                                </select>
                                    @error('es_destacado')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <p>Imágen/es Actual/es:</p>
                        @if(isset($producto->poster))
                        <img src="/storage/product_poster/{{$producto->poster}}" width="100%" alt="Imágen actual del producto a modificar">
                        @endif
                        @if(isset($producto->poster2))
                        <img src="/storage/product_poster/{{$producto->poster2}}" width="100%" alt="Imágen actual del producto a modificar">
                        @endif
                        @if(isset($producto->poster3))
                        <img src="/storage/product_poster/{{$producto->poster3}}" width="100%" alt="Imágen actual del producto a modificar">
                        @endif
                        @if(isset($producto->poster4))
                        <img src="/storage/product_poster/{{$producto->poster4}}" width="100%" alt="Imágen actual del producto a modificar">
                        @endif
                        @if(isset($producto->poster5))
                        <img src="/storage/product_poster/{{$producto->poster5}}" width="100%" alt="Imágen actual del producto a modificar">
                        @endif
                        <div class="form-group row">
                            <label for="poster" class="col-md-4 col-form-label text-md-right">{{__('Ingrese un archivo')}}</label>
                                <div class="col-md-6">
                                    <input id="poster" type="file" name="poster" class="form-control @error('poster') is-invalid @enderror" autofocus>
                                    @error('poster')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                            <label for="poster2" class="col-md-4 col-form-label text-md-right">{{__('Ingrese un segundo archivo')}}</label>
                                <div class="col-md-6">
                                    <input id="poster2" type="file" name="poster2" class="form-control @error('poster2') is-invalid @enderror" autofocus>
                                    @error('poster2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                            <label for="poster3" class="col-md-4 col-form-label text-md-right">{{__('Ingrese un tercer archivo')}}</label>
                                <div class="col-md-6">
                                    <input id="poster3" type="file" name="poster3" class="form-control @error('poster3') is-invalid @enderror" autofocus>
                                    @error('poster3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                            <label for="poster4" class="col-md-4 col-form-label text-md-right">{{__('Ingrese un cuarto archivo')}}</label>
                                <div class="col-md-6">
                                    <input id="poster4" type="file" name="poster4" class="form-control @error('poster4') is-invalid @enderror" autofocus>
                                    @error('poster4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                            <label for="poster5" class="col-md-4 col-form-label text-md-right">{{__('Ingrese un quinto archivo')}}</label>
                                <div class="col-md-6">
                                    <input id="poster5" type="file" name="poster5" class="form-control @error('poster5') is-invalid @enderror" autofocus>
                                    @error('poster5')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Modificar Producto') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
