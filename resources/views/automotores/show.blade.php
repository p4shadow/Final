@extends('layouts.app')

@section('content')
    <h1>Detalles del Automotor</h1>

    <ul>
        <li><strong>Titular:</strong> {{ $automotor->titular_id }}</li>
        <li><strong>Marca:</strong> {{ $automotor->marca }}</li>
        <li><strong>Modelo:</strong> {{ $automotor->modelo }}</li>
        <li><strong>Patente:</strong> {{ $automotor->patente }}</li>
        <li><strong>Tipo:</strong> {{ $automotor->tipo }}</li>
    </ul>

    <a href="{{ route('automotores.index') }}">Volver al listado de automotores</a>
@endsection
