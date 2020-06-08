@extends('adminlte::page')

@section('title', 'Rosario Delicias - Productos')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    <!-- Show status if exists -->
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        <strong> {{ session('status') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </div>
  @endif
  <!-- /.Show status -->

<!-- Show status wrong if exists -->
@if (session('statuswrong'))
<div class="alert alert-danger" role="alert">
    <strong> {{ session('statuswrong') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</div>
@endif
<!-- /.Show statuswrong -->

<div class="container mt-3">
    <div class="row panel-titulo">
        <h2>Productos Disponibles</h2>
    </div>
    <div class="row panel-agregarNuevo justify-content-center my-3">
        <a class="btn btn-primary" href="{{route('productos.create')}}">Agregar Nuevo Producto</a>
    </div>

<div class="row panel-detalles justify-content-center">
    <table id="listado" class="table table-bordered table-hover w-100">
        <thead>
            <tr>
              <th>Titulo</th>
              <th>Descripcion</th>
              <th>Categoria</th>
              <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="myTable">

            @forelse ($productos as $producto)
            <tr>
                <td><a href="/productos/{{$producto->id}}">{{$producto->titulo}}</a></td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->categoria->nombre_categoria}}</td>
                <td>
                    <a class="btn btn-primary float-left" title='ver' href="{{route('productos.show', $producto->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a class="btn btn-success float-left" title='editar' href="{{route('productos.edit', $producto)}}"><i class="far fa-edit" aria-hidden="true"></i></a>

                    <form action="{{route('productos.destroy', $producto)}}" method="post" class="float-left">
                        @csrf
                        @method('DELETE')
                        {{--  <input type="hidden" name="id" value="{{$producto->id}}">  --}}
                        <button type="submit" title='eliminar' class="btn btn-danger" onclick="return confirm('Seguro que quiere borrar el producto?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>


                </td>
            </tr>
            @empty
                <tr><td><h2>No hay Productos Cargados</h2></td></tr>
            @endforelse



          </tbody>

      </table>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


