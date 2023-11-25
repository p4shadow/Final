@extends('layouts.app')

@section('content')
    <h1>Editar Infracción</h1>

    @if ($errors->any())
        <div>
            <strong>Errores:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('infracciones.update', $infracciones->id) }}">
        @csrf
        @method('PUT')

        <label for="fecha">Fecha:</label>
        <input type="text" name="fecha" value="{{ old('fecha', $infracciones->fecha) }}" required>

        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion" value="{{ old('descripcion', $infracciones->descripcion) }}" required>

        <label for="patente">Patente del Automotor:</label>
        <input type="text" name="patente" value="{{ old('patente', $infracciones->autos->patente) }}" required>

        <label for="auto_id"style="display: none;">Auto ID:</label>
        <input type="text" name="auto_id" value="{{ old('auto_id', $infracciones->auto_id) }}" required style="display: none;">

        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" value="{{ old('tipo', $infracciones->tipo) }}" required>

        <button type="submit"class="button">Guardar Cambios</button>
    </form>

    <a href="{{ route('infracciones.index') }}"" class="btn btn-primary">Volver al listado de infracciones</a>
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al Inicio</a>
@endsection
