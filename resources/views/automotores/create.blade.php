
@extends('layouts.app')

@section('content')
    <h1>Alta de Automotor</h1>

    <form action="{{ route('automotores.store') }}" method="post">
        @csrf
        
        <label for="titular_id">Titular:</label>
        <select name="titular_id" required>
            @foreach ($titulares as $titular)
                <option value="{{ $titular->id }}">{{ $titular->nombre }}</option>
            @endforeach
        </select>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" required>
        <br>
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo" required>
        <br>
        <label for="patente">Patente:</label>
        <input type="text" name="patente" id="patente" required>
        <br>
        <label for="tipo">Tipo:</label>
        <select id="tipo" name="tipo" id="tipo" required>
            <option value="standar">Standar</option>
            <option value="suv">SUV</option>
            <option value="camioneta">Camioneta</option>
            <option value="camion">Camión</option>
          </select>
        <br>
        <button type="submit"class="button">Guardar</button>
    </form>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<a href="{{ route('automotores.index') }}"" class="btn btn-primary">Volver al listado de automotores</a>
<a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al Inicio</a>
@endsection



