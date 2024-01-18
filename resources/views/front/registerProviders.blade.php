@extends('layouts.register')
@section('title', 'Registro')
@section('content')
    <section>
        <form class="form-content">
            <h1 id="title">Registro Proveedores</h1>
            <div class="inputbox" id="a">
                <ion-ico name="lock-closed-outline"></ion-ico>
                <input type="text" required>
                <label for="">Usuario</label>
            </div>
            <div class="inputbox" id="a">
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
                <label for="">Cedula</label>
            </div>
            <div class="inputbox">
                <ion-ico name="mail-outline"></ion-ico>
                <input type="email" required>
                <label for="">Edad</label>
            </div>
            <div class="register">
                <button class="btn-login" type="button" id="singIn">Iniciar Sesion</button>
                <button class="btn-register" type="button" id="singUp">Registrar</button>
                <button class="btn-registerP" type="button">Registrarse como Cliente</button>
            </div>
        </form>
    </section>
@endsection
