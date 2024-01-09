<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    <title>@yield('title')</title>
</head>

<body>  
    <div id="container">
        <div id="header">
            <h1 class="titulo">ServiNet</h1>
            <form action="" class="barraNavegacion">
                <!-- <label class="buscarServicio">Buscar Servicio:</label> -->
                <input type="text" id="buscar" name="buscar" class="proveedor"
                    placeholder="Ingrese el servicio que buscar">
            </form>
            <ul>
                <li><a>Registrese</a></li>
                <li><a>Acceda</a></li>
            </ul>
        </div>
        <navbar id="navbar">
            <ul id="navbar-ul">
                <li><a>Carpintero</a></li>
                <li><a>Abogado</a></li>
                <li><a>Licenciado</a></li>
                <li><a>Programador</a></li>
                <li><a>Arquitecto</a></li>
            </ul>
        </navbar>
        {{--Contenido de la pagona  --}}
        <div id="contenido">
            @yield('content')
        </div>
    </div>
</body>

</html>
