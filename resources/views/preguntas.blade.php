@extends('layoutPasos')
@section('title', 'Experiencia')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/preguntas.css') }}">
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
            <!-- Cuerpo del html -->
            
            <form action="" method="POST">
                <div class="form-group">
                <br><br>
                    <h1>Preguntas</h1>
                </div>
                <div class="form-container">
                    <div class="form-group">
                        <label for="trabaja-empresa">¿Has trabajado alguna vez para la empresa?</label>
                        <select id="trabaja-empresa" name="trabaja-empresa" required>
                        <option value="">Seleccione una opción</option>    
                        <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="familiares-empresa">¿Tiene amigos o familiares que trabajan para la empresa?</label>
                        <select id="familiares-empresa" name="familiares-empresa" required>
                        <option value="">Seleccione una opción</option>    
                        <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="transporte-confiable">¿Tiene transporte confiable?</label>
                        <select id="transporte-confiable" name="transporte-confiable" required>
                        <option value="">Seleccione una opción</option>     
                        <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="referido-compania">¿Cómo fue referido a la compañía?</label>
                        <select id="referido-compania" name="referido-compania" required>
                        <option value="">Seleccione una opción</option>     
                        <option value="amigo">Amigo</option>
                            <option value="familiar">Familiar</option>
                            <option value="internet">Internet</option>
                            <option value="otros">Otros</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="despedido-empleo">¿Alguna vez ha sido despedido de su empleo?</label>
                        <select id="despedido-empleo" name="despedido-empleo" required>
                        <option value="">Seleccione una opción</option>     
                        <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="horas-disponibles">¿Qué horas está disponible cada semana?</label>
                        <input type="text" id="horas-disponibles" name="horas-disponibles" required>
                    </div>
                    <div class="form-group">
                        <label for="trabajo-tiempo">¿Está dispuesto a trabajar días festivos, fines de semana, noches?</label>
                        <select id="trabajo-tiempo" name="trabajo-tiempo" required>
                        <option value="">Seleccione una opción</option>     
                        <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                </div>
                <div class="custom-form-group">
                    <button type="button" onclick="location.href='{{ route('experiencia') }}'" class="float-left">Volver</button>
                    <button type="button" onclick="location.href='{{ route('documentacion') }}'" class="float-right">Guardar y continuar</button>
                </div>
            </form>

            <!-- Fin Cuerpo del html -->
        </div>
    </div>
@endsection
