@extends('layout')
@section('title', 'Login')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <body>
        <div class="background-image">
            <div class="general-container">
                <form class="login-form" method="POST" action="{{ route('login') }}">
                    <h2>Iniciar Sesión</h2>
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">Iniciar Sesión</button>
                    </div>

                    <p>¿Aún no tienes una cuenta? <a href="{{ route('register') }}">Crear una cuenta</a></p>
                    <p><a href="">¿Olvidaste tu contraseña?</a></p>
                </form>
            </div>
        </div>
    </body>

    </html>

@endsection
