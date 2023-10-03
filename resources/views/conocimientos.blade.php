@extends('layoutPasos')
@section('title', 'Conocimientos')
@section('content')
<link rel="stylesheet" href="{{ asset('css/personalInformation.css') }}">
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

        <form action="" method="POST">
            <div class="form-group">
                <h1>Conocimientos </h1>
                <h3> * Indica que un campo es obligatorio</h3>
                <h2> Estudios</h2>
                <label for="estudios 1">Estudios 1 *</label>
                <input type="text" class="form-control" id="nombres" name="nombres" required>
                <label for="nombres">Apellidos *</label>
                <input type="text" class="form-control" id="nombres" name="apellidos" required>
            </div>
            <div class="form-group">
                <h2>Dirección</h2>
                <div class="form-row">
                    <div class="form-group">
                        <label for="departamento">Departamento *</label>
                        <select class="form-control" id="departamento" name="departamento">
                            <option value="">Seleccione un departamento</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ciudad">Ciudad *</label>
                        <input type="text" class="form-control" id="ciudad" name="ciudad">
                    </div>
                    <div class="form-group">
                        <label for="nombre_via">Nombre de Vía *</label>
                        <input type="text" class="form-control" id="nombre_via" name="nombre_via">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <h2>Dirección de correo electrónico</h2>
                <label for="">"correo@correo.com"</label>
            </div>

            <div class="form-group">
                <h2>Teléfono</h2>
                <div class="form-row">
                    <div class="form-group">
                        <label for="tipo_telefono">Tipo de Dispositivo telefónico *</label>
                        <select class="form-control" id="tipo_telefono" name="tipo_telefono">
                            <option value="movil">Móvil</option>
                            <option value="telefono">Teléfono</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="numero_telefono">Número de Teléfono *</label>
                        <input type="text" class="form-control" id="numero_telefono" name="numero_telefono">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit">Guardar y continuar</button>
            </div>
        </form>
    </div>
</div>
@endsection
