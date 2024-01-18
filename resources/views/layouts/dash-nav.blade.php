<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/sweetalert2.css') }}">
        <link rel="stylesheet" href="{{ asset('css/material.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="{{ asset('js/material.min.js') }}" ></script>
        <script src="{{ asset('js/sweetalert2.min.js') }}" ></script>
        <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}" ></script>
        <script src="{{ asset('js/main.js') }}" ></script>

</head>

<body>  
    <!-- navLateral -->
<section class="full-width navLateral">
    <div class="full-width navLateral-bg btn-menu"></div>
    <div class="full-width navLateral-body">
        <div class="full-width navLateral-body-logo text-center tittles">
            <i class="zmdi zmdi-close btn-menu"></i> Tablero
        </div>
        <figure class="full-width navLateral-body-tittle-menu">
            <figcaption>
                <span>
                    Full Name Admin<br>
                    <small>Admin</small>
                </span>
            </figcaption>
        </figure>
        <nav class="full-width">
            <ul class="full-width list-unstyle menu-principal">
                <li class="full-width">
                    <a href="/dashboard" class="full-width">
                        <div class="navLateral-body-cl">
                            <i class="zmdi zmdi-view-dashboard"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            HOME
                        </div>
                    </a>
                </li>
                <li class="full-width divider-menu-h"></li>
                <li class="full-width">
                    <a href="#" class="full-width btn-subMenu">
                        <div class="navLateral-body-cl">
                            <i class="zmdi zmdi-case"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            ADMINISTRACION
                        </div>
                        <span class="zmdi zmdi-chevron-left"></span>
                    </a>
                    <ul class="full-width menu-principal sub-menu-options">
                        <li class="full-width">
                            <a href="/test" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="zmdi zmdi-balance"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Pruebas
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a href="/verification" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="zmdi zmdi-truck"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Verificaciones
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a href="/roles" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="zmdi zmdi-card"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Roles
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="full-width divider-menu-h"></li>
                <li class="full-width">
                    <a href="#!" class="full-width btn-subMenu">
                        <div class="navLateral-body-cl">
                            <i class="zmdi zmdi-face"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            USUARIOS
                        </div>
                        <span class="zmdi zmdi-chevron-left"></span>
                    </a>
                    <ul class="full-width menu-principal sub-menu-options">
                        <li class="full-width">
                            <a href="/supplier" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="zmdi zmdi-account"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    PROVEEDORES
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a href="/customer" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="zmdi zmdi-accounts"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    CLIENTES
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</section>
<!-- pageContent -->
<section class="full-width pageContent">
    <!-- navBar -->
    <div class="full-width navBar">
        <div class="full-width navBar-options">
            <i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i>	
            <div class="mdl-tooltip" for="btn-menu">Ocultar / Ver MENU</div>
            <nav class="navBar-options-list">
                <ul class="list-unstyle">
                    <li class="btn-exit" id="btn-exit">
                        <i class="zmdi zmdi-power"></i>
                        <div class="mdl-tooltip" for="btn-exit">LogOut</div>
                    </li>
                    <li class="text-condensedLight noLink" ><small>User Name</small></li>
                </ul>
            </nav>
        </div>
    </div>

        <div>
            @yield('content')
        </div>
    
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
