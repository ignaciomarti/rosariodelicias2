@extends('adminlte::page')

@section('title', 'Rosario Delicias - Page Administration')

@section('content_header')
    <h1>Page Administration</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Home
                      </button>
                    </h2>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <form action="">
                          <label for="main-title-1">Titulo principal</label>
                          <input type="text" name="main-title-1" id="main-title-1">
                          <label for="main-subtitle-1">Subtitulo principal</label>
                          <input type="text" name="main-subtitle-1" id="main-subtitle-1">

                          <label for="main-title-2">Titulo secundario</label>
                          <input type="text" name="main-title-2" id="main-title-2">
                          <label for="main-subtitle-2">Subtitulo secundario</label>
                          <input type="text" name="main-subtitle-2" id="main-subtitle-2">

                          <label for="main-title-3">Titulo terciario</label>
                          <input type="text" name="main-title-3" id="main-title-3">
                          <label for="main-subtitle-3">Subtitulo terciario</label>
                          <input type="text" name="main-subtitle-3" id="main-subtitle-3">
                          

                          <label for="destacados-title">Título sección destacados</label>
                          <input type="text" name="destacados-title" id="destacados-title">
                          <label for="destacados-subtitle">Subtitulo sección destacados</label>
                          <input type="text" name="destacados-subtitle" id="destacados-subtitle">


                          <label for="testimonial">Testimonial</label>
                          <input type="text" name="testimonial" id="testimonial">


                          <label for="title-diferencia">Título "Lo que nos diferencia"</label>
                          <input type="text" name="title-diferencia" id="title-diferencia">
                          <label for="subtitle-diferencia">Subtítulo "Lo que nos diferencia"</label>
                          <input type="text" name="subtitle-diferencia" id="subtitle-diferencia">

                          <label for="title-first-card-diferencia">Título primer card "Lo que nos diferencia"</label>
                          <input type="text" name="title-first-card-diferencia" id="title-first-card-diferencia">
                          <label for="subtitle-first-card-diferencia">Subtítulo primer card "Lo que nos diferencia"</label>
                          <input type="text" name="subtitle-first-card-diferencia" id="subtitle-first-card-diferencia">

                          <label for="title-second-card-diferencia">Título segunda card "Lo que nos diferencia"</label>
                          <input type="text" name="title-second-card-diferencia" id="title-second-card-diferencia">
                          <label for="subtitle-second-card-diferencia">Subtítulo segunda card "Lo que nos diferencia"</label>
                          <input type="text" name="subtitle-second-card-diferencia" id="subtitle-second-card-diferencia">

                          <label for="title-third-card-diferencia">Título tercera card "Lo que nos diferencia"</label>
                          <input type="text" name="title-third-card-diferencia" id="title-third-card-diferencia">
                          <label for="subtitle-third-card-diferencia">Subtítulo tercera card "Lo que nos diferencia"</label>
                          <input type="text" name="subtitle-third-card-diferencia" id="subtitle-third-card-diferencia">

                          
                          <label for="title-section-clasics">Título sección clásicos</label>
                          <input type="text" name="title-section-clasics" id="title-section-clasics">
                          <label for="subtitle-section-clasics">Subtítulo sección clásicos</label>
                          <input type="text" name="subtitle-section-clasics" id="subtitle-section-clasics">


                          <label for="title-section-location">Título sección dónde estamos</label>
                          <input type="text" name="title-section-location" id="title-section-location">
                          <label for="subtitle-section-location">Subtítulo sección dónde estamos</label>
                          <input type="text" name="subtitle-section-location" id="subtitle-section-location">
                          <label for="formulario-contacto">Formulario de Contacto</label>
                          <input type="text" name="formulario-contacto" id="formulario-contacto">

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
                        <form action="" method="post">

                        </form>
                    </div>
                  </div>
                </div>
                <div class="card">
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
                </div>
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
                        <form action="" method="POST">

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


