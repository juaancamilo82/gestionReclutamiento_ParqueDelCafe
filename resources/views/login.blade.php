<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión </title>
    <link rel="stylesheet" href="../css/app.css">
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
            <p><a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a></p>
        </form>
    </div>
</div>
</body>
</html>



