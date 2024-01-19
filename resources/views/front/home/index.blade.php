@extends('layouts.navFront')
@section('title', 'ServiNet')
@section('content')
    <div class="recently-added">
       
        <div class="union">
            <h2>Ultimos añadidos</h2>
            @if (Auth::check())
            <!-- Mostrar la información del customer, si existe -->
            @if (isset($customer))
                <div>
                    <a class="btn btn-sm btn-success" href="{{ route('shop.editCustomer',$customer->id) }}"><i class="fa fa-fw fa-edit"></i> Editar perfil</a>
                    <a class="btn btn-sm btn-success"  href="{{ route('shop.showCustomer',$customer->id) }}"><i class="fa fa-fw fa-edit"></i> Ver perfil</a>
                </div>
{{--                 <p>{{ $customer->id }}</p>
                <p>{{ $customer->name }}</p> --}}
                <!-- Mostrar otros campos del customer -->
            @endif
            <!-- Mostrar la información del supplier, si existe -->
            @if (isset($supplier))
            <div>
                <a class="btn btn-sm btn-success" href="{{ route('shop.editSupplier',$supplier->id) }}"><i class="fa fa-fw fa-edit"></i> Editar perfil</a>
                <a class="btn btn-sm btn-success" href="{{ route('shop.showSupplier',$supplier->id) }}"><i class="fa fa-fw fa-edit"></i> Ver perfil</a>
            </div>
{{--                 <p>{{ $supplier->id }}</p>
                <p>{{ $supplier->name }}</p> --}}
                <!-- Mostrar otros campos del supplier -->
            @endif
        @endif
        </div>

    </div>
    <section class="services">
        @foreach ($supplier_totals as $supplier)            
        <a href="{{ route('shop.showOneSupplier',$supplier->id) }}" class="services-card">
            <div class="container-img">
                <img src="{{ asset('storage/' . $supplier->img_ref) }}"
                    class="imagen-prov"> {{-- img de base de datos --}}
            </div>
            <div class='container-servicio'>
                <p class="servicio-prov">{{$supplier->name}} {{$supplier->subname}}</p>
            </div>
            <div class='container-precio'>
                <p class="precio-servicio">{{$supplier->phone}}</p>
            </div>
        </a>
        @endforeach
    </section>
@endsection
