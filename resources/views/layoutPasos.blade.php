<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/stylePasos.css') }}">
</head>
<body>
<div class="top-bar">

    <div class="logo-container">
        <img src="{{ asset('images/logoParque.png') }}" alt="Logo" class="logo">
    </div>
</div>

<div class="content">
    @yield('content')
</div>
</body>
</html>
