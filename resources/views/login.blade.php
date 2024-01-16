@extends('layouts.plantilla')
@section('title', 'Login')
@section('content')
    <section>
        <form>
            <h1>Iniciar Sesion</h1>
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
            <div class="forget">
                <label for=""><input type="checkbox">Recuerdame</label>
                <a href="#">Olvide mi Contraseña</a>
            </div>
            <button>Iniciar</button>
            <div class="register">
                <p>No tengo una cuenta <a href="#">Registrarse</a></p>
            </div>
        </form>
    </section>
@endsection
