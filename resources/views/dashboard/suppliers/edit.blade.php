@extends('layouts.dash-nav')

@section('title', 'Administracion')

@section('content')

    <section class="full-width header-well">
        <div class="full-width header-well-icon">
            <i class="zmdi zmdi-card"></i>
        </div>
        <div class="full-width header-well-text">
            <p class="text-condensedLight">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aut nulla accusantium minus corporis
                accusamus fuga harum natus molestias necessitatibus.
            </p>
        </div>
    </section>

    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewPayment" class="mdl-tabs__tab is-active">Nuevo</a>
        </div>
        <div class="mdl-tabs__panel is-active" id="tabNewPayment">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-primary text-center tittles">
                            Actualizar Proveedor
                        </div>
                        <div class="full-width panel-content">
                            <form method="POST" action="{{ route('supplier.update', $supplier->id) }}" role="form" enctype="multipart/form-data"> {{-- aca --}}
                                {{ method_field('PATCH') }}
                                @csrf
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;
                                            Informacion </legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" name="name" value="{{$supplier->name}}">
                                            <label class="mdl-textfield__label" for="NamePayment">Nombre</label>
                                            <span class="mdl-textfield__error">Invalid Descripcion</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" name="subname" value="{{$supplier->subname}}">
                                            <label class="mdl-textfield__label" for="NamePayment">Apellido</label>
                                            <span class="mdl-textfield__error">Invalid Descripcion</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" name="dni" value="{{$supplier->dni}}">
                                            <label class="mdl-textfield__label" for="NamePayment">DNI</label>
                                            <span class="mdl-textfield__error">Invalid Descripcion</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" name="phone" value="{{$supplier->phone}}">
                                            <label class="mdl-textfield__label" for="NamePayment">Telefono</label>
                                            <span class="mdl-textfield__error">Invalid Descripcion</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="file" name="img_ref" multiple>
                                            <label class="mdl-textfield__label" for="NamePayment">Imagen de Referencia</label>
                                            <span class="mdl-textfield__error">Invalid Descripcion</span>
                                        </div>
                                    </div>

                                    <input type="hidden" name="users_id" value="{{$user->id}}">

                                </div>
                                <p class="text-center">
                                    <button
                                        class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary"
                                        id="btn-addPayment">
                                        <i class="zmdi zmdi-plus"></i>
                                    </button>
                                <div class="mdl-tooltip" for="btn-addPayment">Añadir</div>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
