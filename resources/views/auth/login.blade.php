@extends('layouts.login')
@section('title', 'Login')

@section('content')
<div class="container">
    @if ($message = Session::get('success'))
    <div class="message-sucessfull">
        <p class="p">Te has registrado correctamente</p>
    </div>
    @endif
    <div class="home"><a href="/">Inicio</a></div>
    <section>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Iniciar Sesion</h1>
                <div class="inputbox">   
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="email">Correo:</label>
                </div>
                <div class="inputbox">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="password">Contraseña: </label>
                </div>
                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Iniciar') }}
                        </button>
                    </div>
                </div>
                <div class="register">
                    <p>No tengo una cuenta <a href="/registro">Registrarse</a></p>
                </div>
            </form>
    </section>
</div>
@endsection

