@extends('layout')
@section('title', 'Login')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <body>
        <div class="background-image">
            <div class="general-container">
                <form class="login-form" method="POST" action="{{ route('iniciar-sesion') }}">
                @csrf
                    <h2>Iniciar Sesión</h2>
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>
                    </div>

                    <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Contraseña" required>
                    </div>

                    <input type="checkbox" id="show-password" value="true">
    <label for="show-password">Mostrar contraseña</label>

                    <div class="form-group">
                        <button type="submit">Iniciar Sesión</button>
                    </div>
                    <div>
                          <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
                          <label class="form-check-label" for="rememberCheck">Mantener la sesión iniciada</label>
                    </div>
                    <p>¿Aún no tienes una cuenta? <a href="{{ route('registro') }}">Crear una cuenta</a></p>
                    <p><a href="">¿Olvidaste tu contraseña?</a></p>
                </form>
            </div>
        </div>
        <script src="{{ asset('js/password.js') }}"></script>

    </body>

    </html>

@endsection
