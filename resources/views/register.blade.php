@extends('layouts.plantilla')
@section('title', 'Registro')
@section('content')
    <section>
        <form>
            <h1>Registro</h1>
            <div class="inputbox">
                <ion-ico name="lock-closed-outline"></ion-ico>
                <input type="text" required>
                <label for="">Nombre</label>
            </div>
            <div class="inputbox">
                <ion-ico name="lock-closed-outline"></ion-ico>
                <input type="text" required>
                <label for="">Apellido</label>
            </div>
            <div class="inputbox">
                <ion-ico name="mail-outline"></ion-ico>
                <input type="email" required>
                <label for="">Correo</label>
            </div>
            <div class="inputbox">
                <ion-ico name="lock-closed-outline"></ion-ico>
                <input type="password" required>
                <label for="">Contraseña</label>
            </div>
            <div class="inputbox">
                <ion-ico name="telefono"></ion-ico>
                <input type="text" required>
                <label for="">Telefono</label>
            </div>
            <div class="inputbox-radio">
                <span class="span-radio">
                    <ion-ico name="rol"></ion-ico>
                    <label for="" class="label">Cliente</label>
                    <input type="radio" name="rol" required value="1">
                </span>
                <span class="span-radio">
                    <ion-ico name="rol"></ion-ico>
                    <label for="" class="label">Proveedor</label>
                    <input type="radio" name="rol" value="2">
                </span>
            </div>
            <button>Registrar</button>
            <div class="register">
                <p>Tengo una cuenta <a href="#">Iniciar Sesion</a></p>
            </div>
        </form>
    </section>
@endsection
