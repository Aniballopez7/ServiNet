@extends('layouts.editarUsuario')
@section('title', 'Perfil Proveedor')

@section('content')
<div class="contenido__pagina">
    <div class="configuracion">
        <h3 class="configuracion__titulo">Editar perfil</h3>
        <form class="form">
            <div class="form_container">
                <div class="form-control">        
                    <input type="hidden" id="username" name="username" value="" />
                </div>
                <div class="form_grupo">
                    <input type="text" name="nombre_soc" class="form_input" placeholder=" " value="" required>
                    <label for="nombre" class="form_label">Usuario:</label>
                    <span class="form_line"></span>
                </div>
                <div class="form_grupo">
                    <input type="text" name="nombre_soc" class="form_input" placeholder=" " value="" required>
                    <label for="nombre" class="form_label">Nombre:</label>
                    <span class="form_line"></span>
                </div>
                <div class="form_grupo">
                    <input type="text" name="apellido_soc" class="form_input" placeholder=" " value="" required>
                    <label for="apellido" class="form_label" value="">Apellido:</label>
                    <span class="form_line"></span>
                </div>
                <div class="form_grupo">
                    <input type="text" name="apellido_soc" class="form_input" placeholder=" " value="" required>
                    <label for="apellido" class="form_label" value="">Cedula:</label>
                    <span class="form_line"></span>
                </div>
                <div class="form_grupo">
                    <input type="text" name="apellido_soc" class="form_input" placeholder=" " value="" required>
                    <label for="apellido" class="form_label" value="">Telefono:</label>
                    <span class="form_line"></span>
                </div>                          
            </div>
            <input type="submit" class="form_submit" name="subir" value="Guardar Cambios">
        </form>
    </div>
</div>
@endsection