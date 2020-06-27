@extends('front.layouts.app')
@section('content')
<div class="contenedor-contacto container">
    <form action="{{route('contactos.insert')}}" method="POST">
        @csrf
          <h4 class="main-color d-block text-center my-4">CONTACTANOS</h4>
          <span class="main-color d-block text-center">Envianos tu consulta y te responderemos a la brevedad</span>
          <div class="contenedor-formulario-contacto d-flex flex-column align-items-initial justify-content-between">
            <div class="contenedor-nombre-contacto d-md-flex justify-content-between align-items-center">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido">
            </div>
            <label for="email">E-mail</label>
            <input type="email" placeholder="ejemplo@ejemplo.com" name="email" id="email">
            <label for="mensaje">Mensaje</label>
            <textarea type="text" id="mensaje" placeholder="Contanos tu consulta lo más detalladamente posible" name="mensaje"></textarea>
            <button type="submit" class="main-btn my-4 py-4 px-5">Enviar</button>
            </div>
    </form>
</div>
@endsection