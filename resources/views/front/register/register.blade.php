@extends('layouts.register')
@section('title', 'Registro')
@section('content')
    <div class="home"><a href="/">Inicio</a></div>
    <section>
        <form class="form-content" method="POST" action="{{ route('customer.store') }}"  role="form" enctype="multipart/form-data">
            @csrf
            <h1 id="title">Registro Clientes</h1>
            <div class="flexbox">
                <div class="inputbox" id="a">
                    <input type="text" name="name" required>
                    <label for="">Nombre</label>
                </div>
                <div class="inputbox">
                    <input type="text" name="subname" required>
                    <label for="">Apellido</label>
                </div>
                <div class="inputbox">
                    <input type="number" name="cedula" required>
                    <label for="">Cedula</label>
                </div>
                <div class="inputbox">
                    <input type="number" name="edad" required>
                    <label for="">Edad</label>
                </div>
                <div class="inputbox">
                    <input type="text" name="email" required>
                    <label for="">Correo</label>
                </div>
                <div class="inputbox">
                    <input type="password" name="password" required>
                    <label for="">Contraseña</label>
                </div>
                <div class="register">
                    <button class="btn-register" type="submit" id="singUp">Registrar</button>
                    <button class="btn-registerP" type="button">
                     <a href="/registroProvedor">
                        Registrarse como Proveedor
                    </a>   
                    </button>
                </div>
            </div>
        </form>
    </section>
@endsection
