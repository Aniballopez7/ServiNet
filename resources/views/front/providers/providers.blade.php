@extends('layouts.providers')
@section('title', 'Provedor')
@section('content')
            <div class="recently-added">
                <h2><a href="/">Volver al inicio</a></h2>
            </div>
            <section class="services">
                <div class="services-card">
                    <div class="container-img">
                        <img src="{{ asset('storage/' . $supplier->img_ref) }}" class="imagen-prov">
                    </div>{{-- colocar imagen --}}
                    <div class="container-description-product">
                        <h2>Descripcion del producto</h2>
                        <div class="description-product">
                            Esta es la descripcion {{-- describir categoria --}}
                        </div>
                    </div>
                </div>
                <div class="details-product">
                    <div class="details-product-name">{{$supplier->name}} {{$supplier->subname}}</div>
                    <div class="details-product-start"></div>
                    {{-- <div class="details-product-price">36$</div> --}}
                    <div class="details-product-price-bs">{{$supplier->phone}}</div>  
                    <button class="details-product-btn"><span>Adquirir Servicio</span></button>  
                </div>
            </section>
@endsection