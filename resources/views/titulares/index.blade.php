@extends('layouts.app')

@section('content')
    <h1>Listado de Titulares</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>Domicilio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($titulares as $titular)
                <tr>
                    <td>{{ $titular->nombre }}</td>
                    <td>{{ $titular->apellido }}</td>
                    <td>{{ $titular->dni }}</td>
                    <td>{{ $titular->domicilio }}</td>
                    <td>
                        <a href="{{ route('titulares.show', $titular->id) }}"class="button">Ver</a>
                        <a href="{{ route('titulares.edit', $titular->id) }}"class="button2">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
    
    <a href="{{ route('titulares.create') }}"" class="btn btn-primary">Agregar Titular</a>

    <a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al Inicio</a>

@endsection
