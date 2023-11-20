@extends('layouts.app')

@section('content')
    <h1>Detalles del Titular</h1>

    <ul>
        <li><strong>Nombre:</strong> {{ $titular->nombre }}</li>
        <li><strong>Apellido:</strong> {{ $titular->apellido }}</li>
        <li><strong>Dni:</strong> {{ $titular->dni }}</li>
        <li><strong>Domicilio:</strong> {{ $titular->domicilio }}</li>
    </ul>

    <a href="{{ route('titulares.index') }}">Volver al listado de titulares</a>
@endsection
