@extends('layouts.app')

@section('content')
    <h1>Editar Titular</h1>

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

    <form method="POST" action="{{ route('titulares.update', $titular->id) }}">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre', $titular->nombre) }}" required>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" value="{{ old('apellido', $titular->apellido) }}" required>

        <label for="dni">Documento:</label>
        <input type="text" name="dni" value="{{ old('dni', $titular->dni) }}" required>

        <label for="domicilio">Domicilio:</label>
        <input type="text" name="domicilio" value="{{ old('domicilio', $titular->domicilio) }}" required>

        <button type="submit">Guardar Cambios</button>
    </form>

    <a href="{{ route('titulares.index') }}">Volver al listado de titulares</a>
@endsection
