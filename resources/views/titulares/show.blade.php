@extends('layouts.app')

@section('content')
    <h1>Detalles del Titular</h1>

    <ul>
        <li><strong>Nombre:</strong> {{ $titular->nombre }}</li>
        <li><strong>Apellido:</strong> {{ $titular->apellido }}</li>
        <li><strong>Dni:</strong> {{ $titular->dni }}</li>
        <li><strong>Domicilio:</strong> {{ $titular->domicilio }}</li>
    </ul>

    <a href="{{ route('titulares.index') }}"" class="btn btn-primary">Volver al listado de titulares</a>
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al Inicio</a>
@endsection
