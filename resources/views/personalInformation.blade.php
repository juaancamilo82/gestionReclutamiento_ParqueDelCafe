@extends('layout')
@section('title', 'Información personal')
@section('content')
<link rel="stylesheet" href="{{ asset('css/personalInformation.css') }}">
<div class="background-image">
    <div class="general-container">
    <form action="" method="POST">
        <div class="form-group">
            <h2> Nombre Legal</h2>
            <label for="nombres">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" required>
            <label for="nombres">Apellidos</label>
            <input type="text" class="form-control" id="nombres" name="apellidos" required>
        </div>
        <div class="form-group">
            <h2>Dirección</h2>
            <div class="form-row">
                <div class="form-group">
                    <h5 for="departamento">Departamento</h5>
                    <select class="form-control" id="departamento" name="departamento">
                        <option value="">Seleccione un departamento</option>
                        <option value="Quindio">Quindio</option>
                        <option value="Antioquia">Antioquia</option>
                        <option value="Risaralda">Risaralda</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad">
                </div>
                <div class="form-group">
                    <label for="nombre_via">Nombre de Vía</label>
                    <input type="text" class="form-control" id="nombre_via" name="nombre_via">
                </div>
            </div>
        </div>


        <div class="form-group">
            <label for="correo">Correo Electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" value="" readonly>
        </div>


        <div class="form-group">
            <h2>Teléfono</h2>
            <div class="form-row">
                <div class="form-group">
                    <h5 for="tipo_telefono">Tipo de Dispositivo</h5>
                    <select class="form-control" id="tipo_telefono" name="tipo_telefono">
                        <option value="movil">Móvil</option>
                        <option value="telefono">Teléfono</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="numero_telefono">Número de Teléfono</label>
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



