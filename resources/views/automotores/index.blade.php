@extends('layouts.app')

@section('content')
    <h2>Listado de automotores</h2>

    <table>
        <thead>
            <tr>
                <th>Titular</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Patente</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($automotores as $automotor)
                <tr>
                    <td>{{ $automotor->titular_id }}</td>
                    <td>{{ $automotor->marca }}</td>
                    <td>{{ $automotor->modelo }}</td>
                    <td>{{ $automotor->patene }}</td>
                    <td>{{ $automotor->tipo }}</td>
                <td>
                    <a href="{{ route('automotores.show', $automotor->id) }}">Ver</a>
                    <a href="{{ route('automotores.edit', $automotor->id) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <a href="{{ route('automotores.create') }}">Agregar Automotor</a>
@endsection
