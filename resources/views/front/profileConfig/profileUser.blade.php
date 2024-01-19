@extends('layouts.editarUsuario')
@section('title', 'Perfil')

@section('content')
    <div class="contenido__pagina">
        <div class="configuracion">
            <h3 class="configuracion__titulo">Editar perfil</h3>
            <form class="form" method="POST" action="{{ route('shop.updateCustomer', $customer->id) }}" role="form" enctype="multipart/form-data">
                {{ method_field('GET') }}
                @csrf
                <div class="form_container">
                    <div class="form-control">        
                        <input type="hidden" id="username" name="users_id" value="{{$user->id}}" />
                    </div>
                    <div class="form_grupo">
                        <input type="text" name="name" class="form_input" placeholder=" " value="{{$customer->name}}" required>
                        <label for="nombre" class="form_label">Nombre:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_grupo">
                        <input type="text" name="subname" class="form_input" placeholder=" " value="{{$customer->subname}}" required>
                        <label for="apellido" class="form_label" value="">Apellido:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_grupo">
                        <input type="text" name="cedula" class="form_input" placeholder=" " value="{{$customer->cedula}}" required>
                        <label for="apellido" class="form_label" value="">Cedula:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_grupo">
                        <input type="text" name="edad" class="form_input" placeholder=" " value="{{$customer->edad}}" required>
                        <label for="apellido" class="form_label" value="">Edad:</label>
                        <span class="form_line"></span>
                    </div>                        
                </div>
                <input type="submit" class="form_submit" name="subir" value="Guardar Cambios">
            </form>
        </div>
    </div>
@endsection