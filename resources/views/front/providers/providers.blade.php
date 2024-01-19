@extends('layouts.providers')
@section('title', 'Provedor')
@section('content')
            <div class="recently-added">
                <h2><a href="/">Volver al inicio</a></h2>
            </div>
            <section class="services">
                <div class="services-card">
                    <div class="container-img">
                        <img src="https://th.bing.com/th/id/R.4b4dfce5cc39d3fe58463d18593da9f0?rik=%2b3MT5Pzj9EzbDQ&pid=ImgRaw&r=0" class="imagen-prov">
                    </div>
                    <div class="container-description-product">
                        <h2>Descripcion del producto</h2>
                        <div class="description-product">
                            Esta es la descripcion
                        </div>
                    </div>
                </div>
                <div class="details-product">
                    <div class="details-product-name">Astronauta</div>
                    <div class="details-product-start"></div>
                    <div class="details-product-price">36$</div>
                    <div class="details-product-price-bs">1280.16bs</div>  
                    <button class="details-product-btn"><span>Adquirir Servicio</span></button>  
                </div>
            </section>
@endsection