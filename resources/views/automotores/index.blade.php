@extends('layouts.app')

@section('content')
    <h2>Listado de automotores</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Titular</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Patente</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($automotores as $automotor)
                <tr>
                    <td>{{ $automotor->titular->nombre }}</td>
                    <td>{{ $automotor->marca }}</td>
                    <td>{{ $automotor->modelo }}</td>
                    <td>{{ $automotor->patente }}</td>
                    <td>{{ $automotor->tipo }}</td>
                <td>
                    <a href="{{ route('automotores.show', $automotor->id) }}"class="button">Ver</a>
                    <a href="{{ route('automotores.edit', $automotor->id) }}"class="button2">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <a href="{{ route('automotores.create') }}" class="btn btn-primary">Agregar Automotor</a>
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al Inicio</a>
@endsection
