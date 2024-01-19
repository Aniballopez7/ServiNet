@extends('layouts.dash-nav')

@section('title', 'Administracion')

@section('content')

    <section class="full-width text-center" style="padding: 40px 0;">
        <h3 class="text-center tittles">Resumen</h3>
        <!-- Tiles -->
        <article class="full-width tile">
            <div class="tile-text">
                <span class="text-condensedLight">
                    {{$test}}<br>
                    <small>Pruebas</small>
                </span>
            </div>
            <i class="zmdi zmdi-account tile-icon"></i>
        </article>
        <article class="full-width tile">
            <div class="tile-text">
                <span class="text-condensedLight">
                    {{$verif}}<br>
                    <small>Verificaciones</small>
                </span>
            </div>
            <i class="zmdi zmdi-label tile-icon"></i>
        </article>
        <article class="full-width tile">
            <div class="tile-text">
                <span class="text-condensedLight">
                    {{$customer}}<br>
                    <small>Clientes</small>
                </span>
            </div>
            <i class="zmdi zmdi-accounts tile-icon"></i>
        </article>
        <article class="full-width tile">
            <div class="tile-text">
                <span class="text-condensedLight">
                    {{$supplier}}<br>
                    <small>Proveedores</small>
                </span>
            </div>
            <i class="zmdi zmdi-truck tile-icon"></i>
        </article>
    </section>

@endsection
