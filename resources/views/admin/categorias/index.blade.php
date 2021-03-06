@extends('adminlte::page')

@section('title', 'Rosario Delicias - Categorías')

@section('content_header')
    <h1>Categorías</h1>
@stop

@section('content')

<div class="container mt-3">
    <div class="row panel-titulo">
        <h2>Categorias Disponibles</h2>
    </div>
    <div class="row panel-agregarNuevo justify-content-center my-3">
        <a class="btn btn-primary" href="{{route('categorias.create')}}">Agregar nueva categoria</a>
    </div>

    <div class="row panel-detalles justify-content-center">
        <table id="listado" class="table table-bordered table-hover w-100">
            <thead>
                <tr>
                  <th>Titulo</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="myTable">

                @forelse ($categorias as $categoria)
                <tr>
                    <td><a href="/categoria/{{$categoria->id}}">{{$categoria->nombre_categoria}}</a></td>
                    <td>
                        <a class="btn btn-primary float-left" href="{{route('categorias.show', $categoria->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a class="btn btn-success float-left" href="{{route('categorias.edit', $categoria)}}"><i class="far fa-edit" aria-hidden="true"></i></a>

                        <form action="{{route('categorias.destroy', $categoria)}}" method="post" class="float-left">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{$categoria->id}}">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Está seguro que desea borrar esta categoría? Los productos que hay en ella serán eliminados.')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                    <tr><td><h2>No hay categorias cargadas</h2></td></tr>
                @endforelse



              </tbody>

          </table>
    </div>
  </div>

@endsection
