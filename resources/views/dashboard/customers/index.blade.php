@extends('layouts.dash-nav')

@section('title', 'Administracion')

@section('content')

<section class="full-width header-well">
    <div class="full-width header-well-icon">
        <i class="zmdi zmdi-card"></i>
    </div>
    <div class="full-width header-well-text">
        <p class="text-condensedLight">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aut nulla accusantium minus corporis accusamus fuga harum natus molestias necessitatibus.
        </p>
    </div>
</section>

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
        <a href="#tabListPayment" class="mdl-tabs__tab is-active">Listado</a>
    </div>

    </div>
    <div class="mdl-tabs__panel is-active" id="tabListPayment">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                <div class="full-width panel mdl-shadow--2dp">
                    <div class="full-width panel-tittle bg-success text-center tittles">
                        Listado de Roles
                    </div>
                    <div class="full-width panel-content">
                        <div class="mdl-list">
                            @foreach ($customers as $customer)                                
                            <div class="mdl-list__item mdl-list__item--two-line">
                                <span class="mdl-list__item-primary-content">
                                    <i class="zmdi zmdi-card mdl-list__item-avatar"></i>
                                    <span>{{$customer->id}}. {{$customer->name}} {{$customer->subname}}</span>
                                </span>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection