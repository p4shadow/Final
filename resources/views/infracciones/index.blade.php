@extends('layouts.app')

@section('content')
    <h2>Listado de Infracciones</h2>

    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Descripción</th>
                <th>Automotor</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($infracciones as $infraccion)
                <tr>
                    <td>{{ $infraccion->fecha }}</td>
                    <td>{{ $infraccion->descripcion }}</td>
                    <td>{{ $infraccion->auto_id }}</td>
                    <td>{{ $infraccion->tipo }}</td>
                <td>
                    <a href="{{ route('infracciones.show', $infraccion->id) }}">Ver</a>
                    <a href="{{ route('infracciones.edit', $infraccion->id) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <a href="{{ route('infracciones.create') }}">Agregar Infracción</a>
@endsection
