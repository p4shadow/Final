@extends('layouts.app')

@section('content')
    <h1>Ingresar Infracción</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('infracciones.store') }}">
        @csrf
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" value="{{ old('fecha') }}" required>
        <br>

        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion" value="{{ old('descripcion') }}" required>
        <br>

        <label for="auto_id">Automotor:</label>
        <input type="text" name="auto_id" value="{{ old('auto_id') }}" required>
        <br>

        <label for="tipo">Tipo:</label>
        <select id="tipo" name="tipo" required>
            <option value="alta velocidad">Alta Velocidad</option>
            <option value="doble fila">Doble Fila</option>
            <option value="alcoholemia">Alcoholemia</option>
            <option value="falta de documentación">Falta de Documentación</option>
          </select>
        <br>

        <button type="submit">Guardar</button>
    </form>

    <a href="{{ route('infracciones.index') }}">Volver al listado de infracciones</a>
@endsection
