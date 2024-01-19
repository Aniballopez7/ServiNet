@extends('layouts.login')
@section('title', 'Login')

@section('content')
<div class="container">
    <section>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Iniciar Sesion</h1>

                <div class="inputbox">
                    <ion-ico name="mail-outline"></ion-ico>
                    
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <label for="email">{{ __('Correo') }}</label>
                </div>

                <div class="inputbox">
                    
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <label for="password">{{ __('Contraseña') }}</label>
                </div>

{{--                 <div class="row mb-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div> --}}

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Iniciar') }}
                        </button>

{{--                         @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif --}}
                    </div>
                </div>
                <div class="register">
                    <p>No tengo una cuenta <a href="/registro">Registrarse</a></p>
                </div>
            </form>
    </section>
</div>
@endsection

