@extends('layouts.navFront')
@section('title', 'Perfil')

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
                        <label for="apellido" class="form_label" value="">Edad:</label>
                        <span class="form_line"></span>
                    </div>
                    <div class="form_grupo">
                        <input type="password" name="password" class="form_input" placeholder=" " value="">
                        <label for="password" class="form_label">Contraseña:</label>
                        <span class="form_line"></span>
                    </div>                            
                </div>
                <input class="subir_archivo"  type="file" name="foto">
                <input type="submit" class="form_submit" name="subir" value="Guardar Cambios">
            </form>
        </div>
    </div>
@endsection