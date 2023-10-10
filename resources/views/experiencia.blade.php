@extends('layoutPasos')
@section('title', 'Experiencia')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/experiencia.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylePasos.css') }}">
    <div class="background-image">
        <div class="general-container">
            <!-- Línea de tiempo -->
            <div class="timeline">
                <div class="step">
                    <div class="dot"></div>
                    <div class="label">Información</div>
                </div>
                <div class="step">
                    <div class="dot"></div>
                    <div class="label">Conocimientos</div>
                </div>
                <div class="step">
                    <div class="dot"></div>
                    <div class="label">Experiencia</div>
                </div>
                <div class="step">
                    <div class="dot"></div>
                    <div class="label">Preguntas</div>
                </div>
                <div class="step">
                    <div class="dot"></div>
                    <div class="label">Documentación</div>
                </div>
                <div class="step">
                    <div class="dot"></div>
                    <div class="label">Revisión</div>
                </div>
            </div>
            <!-- Fin Línea de tiempo -->
            <!-- Contenedor de experiencia -->
            <form action="" method="POST">
                <div class="form-group">
                <br><br>
                    <h1>Experiencia</h1>
                </div>
                <div class="form-container">
                    <h2>Experiencia profesional <span id="experiencia-number">1</span></h2>
                    <div class="form-group">
                        <label for="titulo">Título de puesto</label>
                        <input type="text" id="titulo" name="titulo">
                    </div>
                    <div class="form-group">
                        <label for="empresa">Empresa</label>
                        <input type="text" id="empresa" name="empresa">
                    </div>
                    <div class="form-group">
                        <label for="ubicacion">Ubicación</label>
                        <input type="text" id="ubicacion" name="ubicacion">
                    </div>
                    <div class="form-group">
                        <label for="start-date">Desde</label>
                        <input type="date" id="start-date" name="start-date">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción de rol</label>
                        <textarea name="descripcion" id="descripcion" rows="1" cols="76"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <button id="add-form-btn">Añadir más</button>
                </div>
                <script src="{{ asset('js/experiencia.js') }}"></script>

                <!--Fin Contenedor de experiencia -->
                <div class="divider"></div>

                <div class="custom-form-group">
                    <button type="button" onclick="location.href='{{ route('conocimientos') }}'" class="float-left">Volver</button>
                    <button type="button" onclick="location.href='{{ route('preguntas') }}'" class="float-right">Guardar y continuar</button>
                </div>
        </div>
    </div>
@endsection
