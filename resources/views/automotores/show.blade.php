@extends('layouts.app')

@section('content')
    <h1>Detalles del Automotor</h1>

    <ul>
        <li><strong>Titular:</strong> {{ $automotor->titular->nombre }}</li>
        <li><strong>Marca:</strong> {{ $automotor->marca }}</li>
        <li><strong>Modelo:</strong> {{ $automotor->modelo }}</li>
        <li><strong>Patente:</strong> {{ $automotor->patente }}</li>
        <li><strong>Tipo:</strong> {{ $automotor->tipo }}</li>
    </ul>

    <a href="{{ route('automotores.index') }}" class="btn btn-primary">Volver al listado de automotores</a>
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al Inicio</a>
@endsection
