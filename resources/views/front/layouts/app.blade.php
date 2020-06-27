<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rosario Delicias') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/app2.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/20ee0b6ed7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
      <header class="bg-white">
        <nav class="d-none d-md-flex align-items-center container">
          <a href="/empresa" class="separador-derecha px-3 py-3">Empresa</a>
          <a href="/productos" class="separador-derecha px-3 py-3">Productos</a>

          <div class="dropdown px-3 py-3">
            <a href="/categorias" class="dropbtn px-3 py-3">Categorías</a>
            <div class="dropdown-content">
            <a href="{{Route('categorias.index')}}">Ver todas</a>
              @foreach ($categorias as $categoria)
                <a href="{{Route('categorias.show', $categoria->id)}}">{{$categoria->nombre_categoria}}</a>   
              @endforeach
            </div>
          </div> 

          <a href="/"><img src="/storage/logo.jpg" class="logo" alt="logo de Rosario Delicias"></a>

          <div class="separador-derecha dropdown px-3 py-3">
            <a class="px-3 py-3 dropbtn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Redes
            </a>
          
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item main-color" target="__blank" href="http://www.facebook.com/rosariodelicias">Facebook</a>
              <a class="dropdown-item main-color" target="__blank" href="http://www.instagram.com/rosariodelimx">Instagram</a>
              <a class="dropdown-item main-color" target="__blank" href="https://wa.me/525513545818">Whatsapp</a>
            </div>
          </div>

          <a href="{{Route('contactos.index')}}" class="separador-derecha px-3 py-3">Contacto</a>
          <a href="/carrito" class="separador-derecha px-3 py-3">Carrito</a>
        </nav>

          <nav id="navMobile" class="navbar d-md-none navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" style="border: none;" href="{{ url('/') }}">
                  <img src="/storage/logo.jpg" class="logo" style="width: 30%" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item"><a href="/empresa" class="nav-link">Empresa</a></li>
                        <li class="nav-item"><a href="/productos" class="nav-link">Productos</a></li>
                        <li class="nav-item"><a href="/categorias" class="nav-link">Categorías</a></li>

                        <div class="dropdown">
                          <a class="nav-link" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Redes
                          </a>
                        
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item main-color" target="__blank" href="http://www.facebook.com/rosariodelicias">Facebook</a>
                            <a class="dropdown-item main-color" target="__blank" href="http://www.instagram.com/rosariodelimx">Instagram</a>
                            <a class="dropdown-item main-color" target="__blank" href="https://wa.me/525513545818">Whatsapp</a>
                          </div>
                        </div>

                        <li class="nav-item"><a href="{{Route('contactos.index')}}" class="nav-link">Contacto</a></li>
                        <li class="nav-item"><a href="/carrito" class="nav-link">Carrito</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        </div>
      </header>
          <!-- Show status if exists -->
          @if (session('status'))
            <div class="alert alert-success fixed-bottom" role="alert">
                <strong style="font-size: 1.2rem;"> {{ session('status') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </div>
          @endif
          <!-- /.Show status -->

        <!-- Show status wrong if exists -->
        @if (session('statuswrong'))
        <div class="alert alert-danger fixed-bottom" role="alert">
            <strong style="font-size: 1.2rem;"> {{ session('statuswrong') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </div>
      @endif
      <!-- /.Show statuswrong -->
        <main class="py-4">
            @yield('content')
        </main>

    @include('front.layouts.includes.footer')
</body>
</html>
