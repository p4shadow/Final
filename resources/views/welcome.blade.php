@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Sistema de Registro del Automotor</h2>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Titulares</h5>
                    <p class="card-text">Administra la información de los titulares.</p>
                    <a href="titulares" class="btn btn-primary">Ir a Titulares</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Automotores</h5>
                    <p class="card-text">Gestiona la información de los automotores registrados.</p>
                    <a href="automotores" class="btn btn-primary">Ir a Automotores</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Infracciones</h5>
                    <p class="card-text">Registra y visualiza las infracciones cometidas.</p>
                    <a href="infracciones" class="btn btn-primary">Ir a Infracciones</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts de Bootstrap y otros scripts personalizados si es necesario -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
