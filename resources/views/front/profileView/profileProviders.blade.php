@extends('layouts.verUsuario')
@section('title', 'Perfil Proveedor')

@section('content')
<div class="contenido__pagina">
    <div class="configuracion">
        <h3 class="configuracion__titulo">Ver perfil</h3>
        <form class="form">
            <div class="form_container">
                <div class="form-control">        
                    <input type="hidden" id="username" name="username" value="" />
                </div>
                <div class="form_grupo">
                    <div for="nombre" class="form_div">Nombre:</div>
                    <div><p>{{$supplier->name}}</p></div>
                </div>
                <div class="form_grupo">
                    <div for="apellido" class="form_div" value="">Apellido:</div>
                    <div><p>{{$supplier->subname}}</p></div>
                </div>
                <div class="form_grupo">
                    <div for="apellido" class="form_div" value="">Cedula:</div>
                    <div><p>{{$supplier->dni}}</p></div>
                </div>
                <div class="form_grupo">
                    <div for="apellido" class="form_div" value="">Telefono:</div>
                    <div><p>{{$supplier->phone}}</p></div>
                </div>                          
            </div>
            <input type="submit" class="form_submit" name="subir" value="Editar Perfil">
            <a class="btn btn-sm btn-success" href="{{ route('shop.editSupplier',$supplier->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
        </form>
    </div>
</div>
@endsection