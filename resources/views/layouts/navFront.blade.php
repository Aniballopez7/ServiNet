<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/configuracionUsuario.css') }}">
    <title>@yield('title')</title>
</head>

<body>  
    <div id="container">
        <div id="header">
            <h1><a href="/" class="titulo">ServiNet</a></h1>
            <form action="" class="barraNavegacion">
                <!-- <label class="buscarServicio">Buscar Servicio:</label> -->
                <input type="text" id="buscar" name="buscar" class="proveedor"
                    placeholder="Ingrese el servicio que buscar">
            </form>
            <ul>
                {{-- <li><a>Registrese</a></li>
                <li><a>Acceda</a></li> --}}

                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="/registro">{{ __('Registrarse') }}</a>
                    </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        <navbar id="navbar">
            <ul id="navbar-ul">
                <li class="margin"><a>Carpintero</a></li>
                <li class="margin"><a>Abogado</a></li>
                <li class="margin"><a>Licenciado</a></li>
                <li class="margin"><a>Programador</a></li>
                <li class="margin"><a>Arquitecto</a></li>
            </ul>
        </navbar>
        {{--Contenido de la pagona  --}}
        <div id="contenido">
            @yield('content')
        </div>
    </div>
</body>
<script src="{{ asset('js/verEditar.js') }}" ></script>
</html>
