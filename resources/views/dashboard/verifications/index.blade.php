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
        <a href="#tabNewPayment" class="mdl-tabs__tab is-active">Nuevo</a>
        <a href="#tabListPayment" class="mdl-tabs__tab">Listado</a>
    </div>
    <div class="mdl-tabs__panel is-active" id="tabNewPayment">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
                <div class="full-width panel mdl-shadow--2dp">
                    <div class="full-width panel-tittle bg-primary text-center tittles">
                        Nuevo Nivel
                    </div>
                    <div class="full-width panel-content">
                        <form> {{-- aca --}}
                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--12-col">
                                    <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Informacion </legend><br>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NamePayment">
                                        <label class="mdl-textfield__label" for="NamePayment">Descripcion</label>
                                        <span class="mdl-textfield__error">Invalid Descripcion</span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center">
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addPayment">
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
    <div class="mdl-tabs__panel" id="tabListPayment">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                <div class="full-width panel mdl-shadow--2dp">
                    <div class="full-width panel-tittle bg-success text-center tittles">
                        Listado de Niveles de Verificacion
                    </div>
                    <div class="full-width panel-content">
                        <div class="mdl-list">
                            <div class="mdl-list__item mdl-list__item--two-line">
                                <span class="mdl-list__item-primary-content">
                                    <i class="zmdi zmdi-card mdl-list__item-avatar"></i>
                                    <span>1. Payment method</span>
                                    <span class="mdl-list__item-sub-title">Sub tittle</span>
                                </span>
                                <a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>
                            </div>
                            <li class="full-width divider-menu-h"></li>
                            <div class="mdl-list__item mdl-list__item--two-line">
                                <span class="mdl-list__item-primary-content">
                                    <i class="zmdi zmdi-card mdl-list__item-avatar"></i>
                                    <span>2. Payment method</span>
                                    <span class="mdl-list__item-sub-title">Sub tittle</span>
                                </span>
                                <a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>
                            </div>
                            <li class="full-width divider-menu-h"></li>
                            <div class="mdl-list__item mdl-list__item--two-line">
                                <span class="mdl-list__item-primary-content">
                                    <i class="zmdi zmdi-card mdl-list__item-avatar"></i>
                                    <span>3. Payment method</span>
                                    <span class="mdl-list__item-sub-title">Sub tittle</span>
                                </span>
                                <a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection