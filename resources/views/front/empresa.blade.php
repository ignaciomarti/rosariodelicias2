@extends('front.layouts.app')
@section('content')
<section>
<div class="contenedor-principal-nosotros">
<h1 class="text-center main-color">{{$datos->title_nosotros ? $datos->title_nosotros : ""}}</h1>
<hr class="separador">
    <div class="container contenedor-nosotros d-block d-md-flex justify-content-between align-items-center mt-5">
        <img src="/storage/img-front/{{$datos->first_foto_nosotros}}" class="col-md-6 col-12 d-block align-center d-md-inline" alt="imágen quiénes somos">
        <div class="text-justify col-md-6 contenedor-texto-nosotros">
            <h4 class="main-color">{{$datos->first_subtitle_nosotros? $datos->first_subtitle_nosotros : ""}}</h4>
            <p>{{$datos->first_subtitle_first_text_nosotros? $datos->first_subtitle_first_text_nosotros : ""}}</p>
            <p>{{$datos->first_subtitle_second_text_nosotros? $datos->first_subtitle_second_text_nosotros : ""}}</p>
        </div>
    </div>

    <div class="container contenedor-nosotros d-md-flex justify-content-between align-items-center mt-5">
        <img src="/storage/img-front/{{$datos->second_foto_nosotros}}" class="col-md-6 col-12 d-block align-center d-md-inline order-2" alt="imágen quiénes somos">
        <div class="text-justify col-md-6 contenedor-texto-nosotros">
            <h4 class="main-color">{{$datos->first_subtitle_nosotros? $datos->first_subtitle_nosotros : ""}}</h4>
            <p>{{$datos->first_subtitle_first_text_nosotros? $datos->second_subtitle_first_text_nosotros : ""}}</p>
            <p>{{$datos->first_subtitle_second_text_nosotros? $datos->second_subtitle_second_text_nosotros : ""}}</p>
        </div>
    </div>
    <h3 class="text-center main-color">{{$datos->footer_paragraph_nosotros ? $datos->footer_paragraph_nosotros : ""}}</h3>
</div>

</section>
@endsection