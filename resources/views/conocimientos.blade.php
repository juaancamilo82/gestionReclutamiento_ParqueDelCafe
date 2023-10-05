@extends('layoutPasos')
@section('title', 'Conocimientos')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/conocimientos.css') }}">
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
            <!-- Contenedor de Conocimientos -->
            <form action="" method="POST">
                <div class="form-group">
                    <h1>Conocimientos</h1>
                </div>
                <div class="form-group-1">
                    <h1>Estudios</h1>
                </div>
                <div class="form-container">
                    <h2>Estudios <span id="study-number">1</span></h2>
                    <div class="form-group">
                        <label for="university">Centro de Estudios o Universidad</label>
                        <input type="text" id="university" name="university">
                    </div>
                    <div class="form-group">
                        <label for="degree">Titulación</label>
                        <input type="text" id="degree" name="degree">
                    </div>
                    <div class="form-group">
                        <label for="start-date">Desde</label>
                        <input type="date" id="start-date" name="start-date">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="end-date">Hasta (Fecha real o prevista)</label>
                        <input type="date" id="end-date" name="end-date">
                    </div>
                </div>
                <div class="form-group">
                    <button id="add-form-btn">Añadir</button>
                </div>
                <script src="{{ asset('js/conocimientos.js') }}"></script>

                <!--Fin Contenedor de conocimientos -->
                <div class="divider"></div>

                <div class="languages-container">
                    <h2>Idiomas</h2>
                    <div class="language-input">
                        <input type="text" id="language" placeholder="Ingrese un idioma" class="form-control mb-2">
                        <br><br>
                        <button type="button" class="btn btn-primary" id="add-language">Agregar</button>
                        <br><br>
                    </div>
                    <div class="language-list">
                    </div>
                </div>
                <script src="{{ asset('js/idiomas.js') }}"></script>

                <div class="divider"></div>

                <div class="skills-container">
                    <h2>Habilidades</h2>
                    <div class="skill-input">
                        <input type="text" id="skill" placeholder="Ingrese una habilidad" class="form-control mb-2">
                        <br><br>
                        <button type="button" class="btn btn-primary" id="add-skill">Agregar</button>
                        <br><br>
                    </div>
                    <div class="skill-list">
                    </div>
                </div>
                <script src="{{ asset('js/habilidades.js') }}"></script>

                <!--Fin Contenedor de habilidades -->
                <div class="divider"></div>

                <div class="custom-form-group">
                    <button type="button" onclick="location.href='{{ route('informacion') }}'" class="float-left">Volver</button>
                    <button type="button" onclick="location.href='{{ route('experiencia') }}'" class="float-right">Guardar y continuar</button>
                </div>
        </div>
    </div>
@endsection
