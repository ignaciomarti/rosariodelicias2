@extends('adminlte::page')

@section('title', 'Rosario Delicias - Categorías')

@section('content_header')
    <h1>Editar Categoría</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modificar una categoría') }}</div>

                <div class="card-body">
                    <form action="{{route('categorias.update', $categoria)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="nombre_categoria" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de la Categoría') }}</label>

                            <div class="col-md-6">
                                <input id="nombre_categoria" type="text" class="form-control @error('nombre_categoria') is-invalid @enderror" name="nombre_categoria" value="{{$categoria->nombre_categoria}}" required autocomplete="nombre_categoria" autofocus>

                                @error('nombre_categoria')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="poster" class="col-md-4 col-form-label text-md-right">{{ __('Ingrese una imágen para esta categoría*') }}</label>

                            <div class="col-md-6">
                                <input id="poster" type="file" class="form-control @error('poster') is-invalid @enderror" name="poster" value="{{ old('poster') }}" autocomplete="poster" autofocus>

                                @error('poster')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Modificar Categoría') }}
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
