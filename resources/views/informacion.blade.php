@extends('layoutPasos')
@section('title', 'Información personal')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/informacion.css') }}">
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
            <!-- Fin linea del tiempo -->
            <form action="{{ route('validar-informacion') }}" method="POST">
                <div class="form-group">
                <br><br>
                    <h1>Información </h1>
                    <h3> * Indica que un campo es obligatorio</h3>
                    <h2> Nombre Legal</h2>
                    <label for="nombres">Nombres *</label>
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
                                <option value="Amazonas">Amazonas</option>
                                <option value="Antioquia">Antioquia</option>
                                <option value="Arauca">Arauca</option>
                                <option value="Atlantico">Arauca</option>
                                <option value="Bogota">Bogotá</option>
                                <option value="Bolivar">Bolivar</option>
                                <option value="Boyaca">Boyacá</option>
                                <option value="Caldas">Caldas</option>
                                <option value="Caqueta">Caquetá</option>
                                <option value="Casanare">Casanare</option>
                                <option value="Cauca">Cauca</option>
                                <option value="Cesar">Cesar</option>
                                <option value="Chocó">Chocó</option>
                                <option value="Cordoba">Cordoba</option>
                                <option value="Cundinamarca">Cundinamarca</option>
                                <option value="Guainia">Guainía</option>
                                <option value="Huila">Huila</option>
                                <option value="La Guajira">La Guajira</option>
                                <option value="Magdalena">Magdalena</option>
                                <option value="Meta">Meta</option>
                                <option value="Nariño">Nariño</option>
                                <option value="Norte de Santander">Norte de Santander</option>
                                <option value="Putumayo">Putumayo</option>
                                <option value="Quindio">Quindío</option>
                                <option value="Risaralda">Risaralda</option>
                                <option value="San Andres y providencia">San Andrés y Providencia</option>
                                <option value="Santander">Santander</option>
                                <option value="Sucre">Sucre</option>
                                <option value="Tolima">Tolima</option>
                                <option value="Valle del Cauca">Valle del Cauca</option>
                                <option value="Vaupes">Vaupés</option>
                                <option value="Vichada">Vichada</option>
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
                <div class="custom-form-group">
                    <button type="button" onclick="location.href='{{ route('conocimientos') }}'" class="float-left">Guardar y continuar</button>
                  
                </div>
            </form>
        </div>
    </div>
@endsection
