@extends('layouts.app')

@section('content')
    <h1>Editar Automotor</h1>

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

    <form method="POST" action="{{ route('automotores.update', $automotor->id) }}">
        @csrf
        @method('PUT')

        <label for="titular_id">Titular:</label>
        <input type="text" name="titular_id" value="{{ old('titular_id', $automotor->titular->nombre) }}" required>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" value="{{ old('marca', $automotor->marca) }}" required>

        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" value="{{ old('modelo', $automotor->modelo) }}" required>

        <label for="patente">Patente:</label>
        <input type="text" name="patente" value="{{ old('patente', $automotor->patente) }}" required>

        <label for="tipo">Tipo:</label>
        <select id="tipo" name="tipo" required>
            <option value="standar">Standar</option>
            <option value="suv">SUV</option>
            <option value="camioneta">Camioneta</option>
            <option value="camion">Camión</option>
          </select>

        <button type="submit"class="button">Guardar Cambios</button>
    </form>

    <a href="{{ route('automotores.index') }}" class="btn btn-primary">Volver al listado de automotores</a>
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al Inicio</a>
@endsection
