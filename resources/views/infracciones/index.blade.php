@extends('layouts.app')

@section('content')
    <h2>Listado de Infracciones</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Descripción</th>
                <th>Patente del Automotor</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($infracciones as $infraccion)
                <tr>
                    <td>{{ $infraccion->fecha }}</td>
                    <td>{{ $infraccion->descripcion }}</td>
                    <td>{{ $infraccion->autos->patente }}</td>
                    <td>{{ $infraccion->tipo }}</td>
                <td>
                    <a href="{{ route('infracciones.show', $infraccion->id) }}"class="button">Ver</a>
                    <a href="{{ route('infracciones.edit', $infraccion->id) }}"class="button2">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <a href="{{ route('infracciones.create') }}" class="btn btn-primary">Agregar Infracción</a>
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al Inicio</a>
@endsection
