@extends('layoutPasos')
@section('title', 'Revisión')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/revision.css') }}">
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
            <h1> Revisión </h1>
            <h2> Mi Información </h2>

            <h3> ¿Cómo nos ha conocido?</h3>
<p>Información relacionada con la pregunta "Cómo nos ha conocido?"</p>

<h3> ¿Ha trabajado en el pasado con nosotros?</h3>
<p>Información relacionada con la pregunta "Ha trabajado en el pasado con nosotros?"</p>

<h2 id="nombreLegal"> Nombre legal</h2>
<p>Información relacionada con el "Nombre legal"</p>

<h2 id="direccion">Dirección</h2>
<p>Información relacionada con la "Dirección"</p>

<h2 id="experienciaProfesional">Experiencia profesional</h2>
<p>Información relacionada con la "Experiencia profesional"</p>

<h4>Experiencia profesional 1</h4>
<p>Título de puesto: </p>
<p>Empresa</p>
<p>Ubicación</p>
<p>Actualmente trabajo aquí</p>
<p>Desde</p>
<p>Descripción de rol</p>



            <!-- Fin Cuerpo del html -->
        
            <div class="divider"></div>
           
            <div class="custom-form-group">
                <button type="button" onclick="location.href='{{ route('documentacion') }}'"
                    class="float-left">Volver</button>
                <button type="button" onclick="location.href='{{ route('revision') }}'" class="float-right">Enviar</button>
            </div>
        </div>
    </div>
@endsection
