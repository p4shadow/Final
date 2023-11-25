@extends('layouts.app')

@section('content')
    <h1>Detalles de la Infracción</h1>

    <ul>
        <li><strong>Fecha:</strong> {{ $infraccion->fecha }}</li>
        <li><strong>Descripción:</strong> {{ $infraccion->descripcion }}</li>
        <li><strong>Patente del Automotor:</strong>{{ $infraccion->autos->patente }}</li>
        <li><strong>Tipo de Infraccion:</strong> {{ $infraccion->tipo }}</li>
    </ul>

    <a href="{{ route('infracciones.index') }}" class="btn btn-primary">Volver al listado de Infracciones</a>
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al Inicio</a>
@endsection
