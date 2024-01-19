@extends('layouts.verUsuario')
@section('title', 'Perfil')

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
                        <div><p>{{$customer->name}}</p></div>
                    </div>
                    <div class="form_grupo">
                        <div for="apellido" class="form_div" value="">Apellido:</div>
                        <div><p>{{$customer->subname}}</p></div>
                    </div>
                    <div class="form_grupo">
                        <div for="apellido" class="form_div" value="">Cedula:</div>
                        <div><p>{{$customer->cedula}}</p></div>
                    </div>
                    <div class="form_grupo">
                        <div for="apellido" class="form_div" value="">Edad:</div>
                        <div><p>P{{$customer->edad}}</p></div>
                    </div>
                    <div class="form_grupo">
                        <div for="email" class="form_div">Correo:</div>
                        <div><p>{{-- {{$customer->user->email}} --}}</p></div>
                    </div>                            
                </div>
                <input type="submit" class="form_submit" name="subir" value="Editar Perfil">
                <a class="btn btn-sm btn-success" href="{{ route('shop.editCustomer',$customer->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
            </form>
        </div>
    </div>
@endsection