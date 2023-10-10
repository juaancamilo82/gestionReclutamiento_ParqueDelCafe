@extends('layoutPasos')
@section('title', 'Documentación')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/documentacion.css') }}">
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
            <!-- Inicio Cuerpo del html -->
            <br><br>
            <h1>Subir Documentación</h1>
    
            <div class="container">
                <h1>Archivos</h1>
                <div class="file-upload">
                    <label for="fileInput" class="file-label">
                        Haga clic aquí para cargar
                    </label>
                    <input type="file" id="fileInput" multiple style="display: none;">
                    <div class="file-list" id="fileList">
                        <!-- Los archivos seleccionados se mostrarán aquí -->
                    </div>
                </div>
            </div>
            <script src="{{ asset('js/documentacion.js') }}"></script>
            
            <!-- Fin Cuerpo del html -->
           <br> 
            <div class="custom-form-group">
                <button type="button" onclick="location.href='{{ route('preguntas') }}'" class="float-left">Volver</button>
                <button type="button" onclick="location.href='{{ route('revision') }}'" class="float-right">Guardar y continuar</button>
            </div>
        </div>
    </div>
@endsection
