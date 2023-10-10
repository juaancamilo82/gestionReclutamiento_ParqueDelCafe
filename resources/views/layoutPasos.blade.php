<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/logoParquePagina.png') }}">
    <link rel="stylesheet" href="{{ asset('css/stylePasos.css') }}">
</head>

<body>
    <div class="top-bar">
        <div class="logo-container">
            <img src="{{ asset('images/logoParque.png') }}" alt="Logo" class="logo">
            <a  href="{{route('logout') }}"><button type ="button" class="btn btn-outline-primary me-2">Cerrar sesión</button></a>
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>

</html>
