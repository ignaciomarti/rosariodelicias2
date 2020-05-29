<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
      <header class="bg-white">
        <nav class="d-none d-md-flex align-items-center container">
          <a href="#" class="px-3 py-3">Empresa</a>
          <a href="#" class="px-3 py-3">Productos</a>
          <a href="#" class="px-3 py-3">Categorías</a>
          <a href="/"><img src="img/logo.jpg" class="logo" alt="logo de Rosario Delicias"></a>
          <a href="#" class="px-3 py-3">Redes</a>
          <a href="#" class="px-3 py-3">Contacto</a>
          <a href="#" class="px-3 py-3">Carrito</a>
        </nav>

          <nav id="navMobile" class="navbar d-md-none navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" style="border: none;" href="{{ url('/') }}">
                  <img src="img/logo.jpg" class="logo" style="width: 30%" alt="logo de Rosario Delicias">
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
                        <li class="nav-item"><a href="" class="nav-link">Empresa</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Productos</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Categorías</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Redes</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Contacto</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Carrito</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        </div>
      </header>

        <main class="py-4">
            @yield('content')
        </main>

    @include('front.layouts.includes.footer')
</body>
</html>
