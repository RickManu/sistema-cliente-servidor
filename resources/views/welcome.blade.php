<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- Incluye Bootstrap u otro framework CSS si lo usas -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <!-- Navegación para Login y Registro -->
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('login') }}" class="btn btn-primary me-2">Iniciar Sesión</a>
            <a href="{{ route('register') }}" class="btn btn-outline-primary">Registrar</a>
        </div>

        <!-- Contenido principal de la página de aterrizaje -->
        <div class="text-center">
            <h1>Bienvenido a Mi Sistema de Productos</h1>
            <p class="lead">Gestiona tus productos de forma fácil y rápida.</p>
            <img src="https://via.placeholder.com/600x400" alt="Imagen de bienvenida" class="img-fluid my-4">
        </div>
    </div>
</body>
</html>