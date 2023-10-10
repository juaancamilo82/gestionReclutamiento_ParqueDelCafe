@extends('layout')
@section('title', 'Registro')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">

    <body>
        <div class="background-image">
            <div class="general-container">
                <form class="login-form" method="POST" action="{{ route('validar-registro') }}">
                @csrf
                    <h2>Crear Cuenta</h2>
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" placeholder="Contraseña" required>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Verificar Contraseña:</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            placeholder="Verificar Contraseña" required>
                    </div>


                    <input type="checkbox" id="show-password" value="true">
    <label for="show-password">Mostrar contraseñas</label>

                    <div class="form-group-box">
                        <p><a href="">Aceptar términos y condiciones </a></p>
                        <input type="checkbox" id="consentimiento" name="consentimiento" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">Crear Cuenta</button>
                    </div>
                    <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Iniciar Sesión</a></p>
                    <p><a href="">¿Olvidaste tu contraseña?</a></p>
                </form>
            </div>
        </div>
        <script src="{{ asset('js/password.js') }}"></script>
    </body>
    
    </html>
@endsection
