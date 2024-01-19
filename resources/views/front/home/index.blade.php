@extends('layouts.navFront')
@section('title', 'ServiNet')
@section('content')
    <div class="recently-added">
        @if (Auth::check())
            <!-- Mostrar la información del customer, si existe -->
            @if (isset($customer))
                <a class="btn btn-sm btn-success" href="{{ route('shop.editCustomer',$customer->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                <a class="btn btn-sm btn-success"  style="background: blue" href="{{ route('shop.showCustomer',$customer->id) }}"><i class="fa fa-fw fa-edit"></i> Ver</a>
{{--                 <p>{{ $customer->id }}</p>
                <p>{{ $customer->name }}</p> --}}
                <!-- Mostrar otros campos del customer -->
            @endif
            <!-- Mostrar la información del supplier, si existe -->
            @if (isset($supplier))
                <a class="btn btn-sm btn-success" href="{{ route('shop.editSupplier',$supplier->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                <a class="btn btn-sm btn-success" style="background: blue" href="{{ route('shop.showSupplier',$supplier->id) }}"><i class="fa fa-fw fa-edit"></i> Ver</a>
{{--                 <p>{{ $supplier->id }}</p>
                <p>{{ $supplier->name }}</p> --}}
                <!-- Mostrar otros campos del supplier -->
            @endif
        @endif
        <h2>Ultimos añadidos</h2>

    </div>
    <section class="services">
        <a href="provedor" class="services-card">
            <div class="container-img">
                <img src="https://th.bing.com/th/id/R.4b4dfce5cc39d3fe58463d18593da9f0?rik=%2b3MT5Pzj9EzbDQ&pid=ImgRaw&r=0"
                    class="imagen-prov">
            </div>
            <div class='container-servicio'>
                <p class="servicio-prov">Astronauta</p>
            </div>
            <div class='container-precio'>
                <p class="precio-servicio">3600$</p>
            </div>
        </a>
        <a href="provedor" class="services-card">
            <div class="container-img">
                <img src="https://th.bing.com/th/id/R.4b4dfce5cc39d3fe58463d18593da9f0?rik=%2b3MT5Pzj9EzbDQ&pid=ImgRaw&r=0"
                    class="imagen-prov">
            </div>
            <div class='container-servicio'>
                <p class="servicio-prov">Astronauta</p>
            </div>
            <div class='container-precio'>
                <p class="precio-servicio">3600$</p>
            </div>
        </a>
        <a href="provedor" class="services-card">
            <div class="container-img">
                <img src="https://th.bing.com/th/id/R.4b4dfce5cc39d3fe58463d18593da9f0?rik=%2b3MT5Pzj9EzbDQ&pid=ImgRaw&r=0"
                    class="imagen-prov">
            </div>
            <div class='container-servicio'>
                <p class="servicio-prov">Astronauta</p>
            </div>
            <div class='container-precio'>
                <p class="precio-servicio">3600$</p>
            </div>
        </a>
        <a href="provedor" class="services-card">
            <div class="container-img">
                <img src="https://th.bing.com/th/id/R.4b4dfce5cc39d3fe58463d18593da9f0?rik=%2b3MT5Pzj9EzbDQ&pid=ImgRaw&r=0"
                    class="imagen-prov">
            </div>
            <div class='container-servicio'>
                <p class="servicio-prov">Astronauta</p>
            </div>
            <div class='container-precio'>
                <p class="precio-servicio">3600$</p>
            </div>
        </a>
        <a href="provedor" class="services-card">
            <div class="container-img">
                <img src="https://th.bing.com/th/id/R.4b4dfce5cc39d3fe58463d18593da9f0?rik=%2b3MT5Pzj9EzbDQ&pid=ImgRaw&r=0"
                    class="imagen-prov">
            </div>
            <div class='container-servicio'>
                <p class="servicio-prov">Astronauta</p>
            </div>
            <div class='container-precio'>
                <p class="precio-servicio">3600$</p>
            </div>
        </a>
    </section>
@endsection
