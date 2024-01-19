@extends('layouts.dash-nav')

@section('title', 'Administracion')

@section('content')

<section class="full-width header-well">
    <div class="full-width header-well-icon">
        <i class="zmdi zmdi-account"></i>
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
    <div class="mdl-tabs__panel is-active" id="tabListPayment">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                <div class="full-width panel mdl-shadow--2dp">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <div class="full-width panel-tittle bg-success text-center tittles">
                        Listado de Proveedores
                    </div>
                    <div class="full-width panel-content">
                        <div class="mdl-list">
                            @foreach ($suppliers as $supplier)    
                            
                                <div class="mdl-list__item mdl-list__item--two-line">
                                    <span class="mdl-list__item-primary-content">
                                <i class="zmdi zmdi-card mdl-list__item-avatar"></i>
                                    <span>{{$supplier->id}}. {{$supplier->name}} {{$supplier->subname}}</span>
                                    </span>
                                    <form action="{{ route('supplier.destroy',$supplier->id) }}" method="POST">
                                        <a class="btn btn-sm btn-success" href="{{ route('supplier.edit',$supplier->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                    </form>
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