@extends('layouts.editarUsuario')
@section('title', 'Perfil Proveedor')

@section('content')
<div class="contenido__pagina">
    <div class="configuracion">
        <h3 class="configuracion__titulo">Editar perfil</h3>
        <form class="form" method="POST" action="{{ route('shop.updateSupplier', $supplier->id) }}" role="form" enctype="multipart/form-data">
            {{ method_field('GET') }}
            @csrf
            <div class="form_container">
                <div class="form-control">        
                    <input type="hidden" id="username" name="users_id" value="{{$user->id}}" />
                </div>
                <div class="form_grupo">
                    <input type="text" name="name" class="form_input" placeholder=" " value="{{$supplier->name}}" required>
                    <label for="nombre" class="form_label">Nombre:</label>
                    <span class="form_line"></span>
                </div>
                <div class="form_grupo">
                    <input type="text" name="subname" class="form_input" placeholder=" " value="{{$supplier->subname}}" required>
                    <label for="nombre" class="form_label">Apellido:</label>
                    <span class="form_line"></span>
                </div>
                <div class="form_grupo">
                    <input type="text" name="dni" class="form_input" placeholder=" " value="{{$supplier->dni}}" required>
                    <label for="apellido" class="form_label" value="">Cedula</label>
                    <span class="form_line"></span>
                </div>
                <div class="form_grupo">
                    <input type="text" name="phone" class="form_input" placeholder=" " value="{{$supplier->phone}}" required>
                    <label for="apellido" class="form_label" value="">Telefono:</label>
                    <span class="form_line"></span>
                </div>
                      
            </div>
            <input type="submit" class="form_submit" name="subir" value="Guardar Cambios">
        </form>
    </div>
</div>
@endsection