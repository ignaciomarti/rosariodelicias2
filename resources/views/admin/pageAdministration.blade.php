@extends('adminlte::page')

@section('title', 'Rosario Delicias - Page Administration')

@section('content_header')
    <h1>Page Administration</h1>
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
            <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Home
                      </button>
                    </h2>
                  </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <form class="contenedor-formulario-administrador d-flex flex-column" action="{{Route('administration.update', $datos->id)}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <input type="hidden" value="home" name="id_form">
                          <label for="main_title_1">Titulo principal</label>
                          <input type="text" name="main_title_1" id="main_title_1" value="{{$datos->main_title_1}}">
                          <label for="main_subtitle_1">Subtitulo principal</label>
                          <input type="text" name="main_subtitle_1" id="main_subtitle_1" value="{{$datos->main_subtitle_1}}">
                          <label for="foto_slider_1">Foto de fondo 1</label>
                          <input type="file" name="foto_slider_1" id="foto_slider_1">

                          <label for="main_title_2">Titulo secundario</label>
                          <input type="text" name="main_title_2" id="main_title_2" value="{{$datos->main_title_2}}">
                          <label for="main_subtitle_2">Subtitulo secundario</label>
                          <input type="text" name="main_subtitle_2" id="main_subtitle_2" value="{{$datos->main_subtitle_2}}">
                          <label for="foto_slider_2">Foto de fondo 2</label>
                          <input type="file" name="foto_slider_2" id="foto_slider_2">

                          <label for="main_title_3">Titulo terciario</label>
                          <input type="text" name="main_title_3" id="main_title_3" value="{{$datos->main_title_3}}">
                          <label for="main_subtitle_3">Subtitulo terciario</label>
                          <input type="text" name="main_subtitle_3" id="main_subtitle_3" value="{{$datos->main_subtitle_3}}">
                          <label for="foto_slider_3">Foto de fondo 3</label>
                          <input type="file" name="foto_slider_3" id="foto_slider_3">
                          

                          <label for="destacados_title">Título sección destacados</label>
                          <input type="text" name="destacados_title" id="destacados_title" value="{{$datos->destacados_title}}">
                          <label for="destacados_subtitle">Subtitulo sección destacados</label>
                          <input type="text" name="destacados_subtitle" id="destacados_subtitle" value="{{$datos->destacados_subtitle}}">


                          <label for="testimonial">Testimonial</label>
                          <input type="text" name="testimonial" id="testimonial" value="{{$datos->testimonial}}">
                          <label for="foto_testimonial">Foto testimonial</label>
                          <input type="file" name="foto_testimonial" id="foto_testimonial">
                          <label for="foto_fondo_testimonial">Foto de fondo</label>
                          <input type="file" name="foto_fondo_testimonial" id="foto_fondo_testimonial">


                          <label for="title_diferencia">Título "Lo que nos diferencia"</label>
                          <input type="text" name="title_diferencia" id="title_diferencia" value="{{$datos->title_diferencia}}">
                          <label for="subtitle_diferencia">Subtítulo "Lo que nos diferencia"</label>
                          <input type="text" name="subtitle_diferencia" id="subtitle_diferencia" value="{{$datos->subtitle_diferencia}}">

                          <label for="title_first_card_diferencia">Título primer card "Lo que nos diferencia"</label>
                          <input type="text" name="title_first_card_diferencia" id="title_first_card_diferencia" value="{{$datos->title_first_card_diferencia}}">
                          <label for="subtitle_first_card_diferencia">Subtítulo primer card "Lo que nos diferencia"</label>
                          <input type="text" name="subtitle_first_card_diferencia" id="subtitle_first_card_diferencia" value="{{$datos->subtitle_first_card_diferencia}}">

                          <label for="title_second_card_diferencia">Título segunda card "Lo que nos diferencia"</label>
                          <input type="text" name="title_second_card_diferencia" id="title_second_card_diferencia" value="{{$datos->title_second_card_diferencia}}">
                          <label for="subtitle_second_card_diferencia">Subtítulo segunda card "Lo que nos diferencia"</label>
                          <input type="text" name="subtitle_second_card_diferencia" id="subtitle_second_card_diferencia" value="{{$datos->subtitle_second_card_diferencia}}">

                          <label for="title_third_card_diferencia">Título tercera card "Lo que nos diferencia"</label>
                          <input type="text" name="title_third_card_diferencia" id="title_third_card_diferencia" value="{{$datos->title_third_card_diferencia}}">
                          <label for="subtitle_third_card_diferencia">Subtítulo tercera card "Lo que nos diferencia"</label>
                          <input type="text" name="subtitle_third_card_diferencia" id="subtitle_third_card_diferencia" value="{{$datos->subtitle_third_card_diferencia}}">

                          
                          <label for="title_section_clasics">Título sección clásicos</label>
                          <input type="text" name="title_section_clasics" id="title_section_clasics" value="{{$datos->title_section_clasics}}">
                          <label for="subtitle_section_clasics">Subtítulo sección clásicos</label>
                          <input type="text" name="subtitle_section_clasics" id="subtitle_section_clasics" value="{{$datos->subtitle_section_clasics}}">
                          <label for="foto_fondo_clasics">Foto de fondo</label>
                          <input type="file" name="foto_fondo_clasics" id="foto_fondo_clasics">


                          <label for="title_section_location">Título sección dónde estamos</label>
                          <input type="text" name="title_section_location" id="title_section_location" value="{{$datos->title_section_location}}">
                          <label for="subtitle_section_location">Subtítulo sección dónde estamos</label>
                          <input type="text" name="subtitle_section_location" id="subtitle_section_location" value="{{$datos->subtitle_section_location}}">
                          <label for="formulario_contacto">Formulario de Contacto</label>
                          <input type="text" name="formulario_contacto" id="formulario_contacto" value="{{$datos->formulario_contacto}}">

                          <button type="submit">Actualizar</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Empresa
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <form class="contenedor-formulario-administrador d-flex flex-column" action="{{Route('administration.update', $datos->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                          @method('PUT')
                          <input type="hidden" value="nosotros" name="id_form">
                          <label for="title_nosotros">Título principal Sección Empresa</label>
                          <input type="text" name="title_nosotros" id="title_nosotros" value="{{$datos->title_nosotros}}">
                          <label for="first_subtitle_nosotros">Subtítulo primero sección empresa</label>
                          <input type="text" name="first_subtitle_nosotros" id="first_subtitle_nosotros" value="{{$datos->first_subtitle_nosotros}}">
                          <label for="first_foto_nosotros">Primera foto</label>
                          <input type="file" name="first_foto_nosotros" id="first_foto_nosotros">
                          <label for="first_subtitle_first_text_nosotros">Primer texto de la primera seccion</label>
                          <input type="text" name="first_subtitle_first_text_nosotros" id="first_subtitle_first_text_nosotros" value="{{$datos->first_subtitle_first_text_nosotros}}">
                          <label for="first_subtitle_second_text_nosotros">Segundo texto de la primera seccion</label>
                          <input type="text" name="first_subtitle_second_text_nosotros" id="first_subtitle_second_text_nosotros" value="{{$datos->first_subtitle_second_text_nosotros}}">
                          <label for="second_subtitle_nosotros">Subtítulo segundo sección empresa</label>
                          <input type="text" name="second_subtitle_nosotros" id="second_subtitle_nosotros" value="{{$datos->second_subtitle_nosotros}}">
                          <label for="second_subtitle_first_text_nosotros">Primer texto de la segunda seccion</label>
                          <input type="text" name="second_subtitle_first_text_nosotros" id="second_subtitle_first_text_nosotros" value="{{$datos->second_subtitle_first_text_nosotros}}">
                          <label for="second_foto_nosotros">Segunda foto</label>
                          <input type="file" name="second_foto_nosotros" id="second_foto_nosotros">
                          <label for="second_subtitle_second_text_nosotros">Segundo texto de la segunda seccion</label>
                          <input type="text" name="second_subtitle_second_text_nosotros" id="second_subtitle_second_text_nosotros" value="{{$datos->second_subtitle_second_text_nosotros}}">
                          <label for="footer_paragraph_nosotros">Último párrafo</label>
                          <input type="text" name="footer_paragraph_nosotros" id="footer_paragraph_nosotros" value="{{$datos->footer_paragraph_nosotros}}">
                          <button type="submit">Actualizar</button>
                        </form>
                    </div>
                  </div>
                </div>
                {{-- <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Productos
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <form action="" method="POST">

                        </form>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Categorias
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <form action="" method="POST">

                        </form>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Redes
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <form action="" method="POST">

                        </form>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Contacto
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <form action="" method="POST">

                        </form>
                    </div>
                  </div>
                </div> --}}
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Carrito
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      <form class="contenedor-formulario-administrador d-flex flex-column" action="{{Route('administration.update', $datos->id)}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <input type="hidden" value="cart" name="id_form">
                          <label for="cart_title">Título principal carrito</label>
                          <input type="text" name="cart_title" id="cart_title" value="{{$datos->cart_title}}">
                          <label for="cart_subtitle">Subtítulo sección carrito</label>
                          <input type="text" name="cart_subtitle" id="cart_subtitle" value="{{$datos->cart_subtitle}}">
                          <label for="first_ask">Primera pregunta</label>
                          <input type="text" name="first_ask" id="first_ask" value="{{$datos->first_ask}}">
                          <label for="first_answer">Primera respuesta</label>
                          <input type="text" name="first_answer" id="first_answer" value="{{$datos->first_answer}}">
                          <label for="second_ask">Segunda pregunta</label>
                          <input type="text" name="second_ask" id="second_ask" value="{{$datos->second_ask}}">
                          <label for="second_answer">Segunda respuesta</label>
                          <input type="text" name="second_answer" id="second_answer" value="{{$datos->second_answer}}">
                          <label for="third_ask">Tercera pregunta</label>
                          <input type="text" name="third_ask" id="third_ask" value="{{$datos->third_ask}}">
                          <label for="third_answer">Tercera respuesta</label>
                          <input type="text" name="third_answer" id="third_answer" value="{{$datos->third_answer}}">
                          <label for="fourth_ask">Cuarta pregunta</label>
                          <input type="text" name="fourth_ask" id="fourth_ask" value="{{$datos->fourth_ask}}">
                          <label for="fourth_answer">Cuarta respuesta</label>
                          <input type="text" name="fourth_answer" id="fourth_answer" value="{{$datos->fourth_answer}}">
                          <label for="fifth_ask">Quinta pregunta</label>
                          <input type="text" name="fifth_ask" id="fifth_ask" value="{{$datos->fifth_ask}}">
                          <label for="fifth_answer">Quinta respuesta</label>
                          <input type="text" name="fifth_answer" id="fifth_answer" value="{{$datos->fifth_answer}}">
                          <label for="sixth_ask">Sexta pregunta</label>
                          <input type="text" name="sixth_ask" id="sixth_ask" value="{{$datos->sixth_ask}}">
                          <label for="sixth_answer">Sexta respuesta</label>
                          <input type="text" name="sixth_answer" id="sixth_answer" value="{{$datos->sixth_answer}}">
                          <label for="seventh_ask">Séptima pregunta</label>
                          <input type="text" name="seventh_ask" id="seventh_ask" value="{{$datos->seventh_ask}}">
                          <label for="seventh_answer">Séptima respuesta</label>
                          <input type="text" name="seventh_answer" id="seventh_answer" value="{{$datos->seventh_answer}}">
                          <button type="submit">Actualizar</button>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


