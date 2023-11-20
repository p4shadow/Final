<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Proyeto Final Laravel</title>
    <!-- Agrega los enlaces a Bootstrap y FontAwesome aquí -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- Agrega tus estilos personalizados aquí -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Proyecto Final Laravel</a>
            <!-- Agrega tu menú de navegación aquí -->
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Scripts de Bootstrap y FontAwesome -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
</body>
</html>
