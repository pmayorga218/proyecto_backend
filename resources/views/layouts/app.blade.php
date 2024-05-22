<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #2b62ff; /* Fondo azul más oscuro */
            position: relative; /* Para posicionar las esferas */
            color: #000; /* Texto en negro */
        }

        .navbar {
            background-color: #528eff; /* Fondo azul más claro para la navbar */
        }

        .navbar-brand, .nav-link {
            color: #000 !important; /* Texto negro */
        }

        .navbar-toggler {
            border-color: #000; /* Borde negro para el toggler */
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        .dropdown-menu {
            background-color: #528eff; /* Fondo azul más claro para el menú desplegable */
        }

        .dropdown-item {
            color: #000 !important; /* Texto negro para los ítems del menú */
        }

        .dropdown-item:hover {
            background-color: #2b62ff; /* Fondo azul oscuro al pasar el mouse */
        }

        .card {
            border-radius: 20px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
            background-color: #528eff; /* Fondo azul más claro */
            color: #000; /* Texto negro */
        }

        .card-header {
            background-color: transparent;
            border-bottom: none;
            text-align: center;
            font-size: 24px;
            color: #000; /* Texto negro */
        }

        .btn-primary {
            background-color: #b1d7ff;
            border: none;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #000; /* Texto negro */
        }

        .btn-primary:hover {
            background-color: #000;
            color: #fff; /* Texto blanco al pasar el mouse */
        }

        .btn-secondary {
            background-color: #ffffff;
            border: none;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-top: 10px;
            color: #000; /* Texto negro */
        }

        .btn-secondary:hover {
            background-color: #b1d7ff;
        }

        .btn-link {
            color: #b1d7ff;
        }

        .btn-link:hover {
            color: #fff;
        }

        /* Esferas */
        .sphere {
            position: absolute; /* Posición absoluta */
            border-radius: 50%; /* Borde redondeado */
            background: radial-gradient(rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0)); /* Gradiente radial blanco-transparente */
            pointer-events: none; /* No captura eventos del ratón */
        }

        .sphere:nth-child(1) {
            width: 150px;
            height: 150px;
            top: 10%;
            left: 10%;
        }

        .sphere:nth-child(2) {
            width: 100px;
            height: 100px;
            top: 30%;
            right: 15%;
        }

        .sphere:nth-child(3) {
            width: 200px;
            height: 200px;
            bottom: 15%;
            left: 25%;
        }

        .sphere:nth-child(4) {
            width: 120px;
            height: 120px;
            bottom: 5%;
            right: 5%;
        }

        .sphere:nth-child(5) {
            width: 180px;
            height: 180px;
            top: 20%;
            left: 40%;
        }

        .sphere:nth-child(6) {
            width: 90px;
            height: 90px;
            top: 60%;
            left: 10%;
        }

        .sphere:nth-child(7) {
            width: 130px;
            height: 130px;
            top: 70%;
            right: 25%;
        }

        .sphere:nth-child(8) {
            width: 110px;
            height: 110px;
            bottom: 25%;
            left: 50%;
        }

        .sphere:nth-child(9) {
            width: 100px;
            height: 100px;
            top: 50%;
            right: 40%;
        }

        .sphere:nth-child(10) {
            width: 160px;
            height: 160px;
            top: 5%;
            right: 30%;
        }

    </style>
</head>
<body>
    <div class="sphere"></div>
    <div class="sphere"></div>
    <div class="sphere"></div>
    <div class="sphere"></div>
    <div class="sphere"></div>
    <div class="sphere"></div>
    <div class="sphere"></div>
    <div class="sphere"></div>
    <div class="sphere"></div>
    <div class="sphere"></div>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
