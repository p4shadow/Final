@extends('layouts.app')

@section('content')
    <h1>Crear Titular</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('titulares.store') }}">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}" required>
        <br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" value="{{ old('apellido') }}" required>
        <br>

        <label for="dni">Documento:</label>
        <input type="text" name="dni" value="{{ old('dni') }}" required>
        <br>

        <label for="domicilio">Domicilio:</label>
        <input type="text" name="domicilio" value="{{ old('domicilio') }}" required>
        <br>

        <button type="submit">Guardar</button>
    </form>

    <a href="{{ route('titulares.index') }}">Volver al listado de titulares</a>
@endsection
