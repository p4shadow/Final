@extends('layouts.app')

@section('content')
    <h1>Listado de Titulares</h1>

    <table>
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
                        <a href="{{ route('titulares.show', $titular->id) }}">Ver</a>
                        <a href="{{ route('titulares.edit', $titular->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <a href="{{ route('titulares.create') }}">Agregar Titular</a>
@endsection

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">¡Bienvenido a tu Proyecto Laravel!</h1>
        <p class="lead">Este es un hermoso template de estilo visual profesional.</p>
        <hr class="my-4">
        <p>Personaliza esta página según tus necesidades.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Leer más</a>
    </div>
@endsection