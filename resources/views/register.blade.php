@extends('layout')
@section('title', 'Registro')
@section('content')
<body>
<div class="background-image">
    <div class="general-container">
        <form class="login-form" method="POST" action="{{ route('register') }}">

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
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Verificar Contraseña" required>
            </div>

            <div class="form-group-box">
                <p><a href="{{ route('login') }}">Aceptar términos y condiciones </a></p>
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
</body>

@endsection



