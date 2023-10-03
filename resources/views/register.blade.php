<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario </title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
<div class="top-bar">
    <div class="logo-container">
        <!-- Logotipo -->
        <img src="../images/logoParque.png" alt="Logo" class="logo">
    </div>
</div>
<div class="background-image">
    <div class="login-container">
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
            <p><a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a></p>
        </form>
    </div>
</div>
</body>

