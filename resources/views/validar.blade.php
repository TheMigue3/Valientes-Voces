<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Historias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Asegúrate de que esta ruta sea correcta -->
</head>
<body style="background-color: #e0f7fa; color: #2c3e50;">
    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg" style="background-color: #008080;">
        <a class="navbar-brand" href="#" style="color: #ffffff;">Panel de Administración</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="logout()" style="color: #ffffff;">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container text-center mt-5">
        <h1>Validación de Historias</h1>
        
        <img src="{{ asset('img/moño.png') }}" alt="Información" class="info-image">

        <div class="request-container my-4 p-4" style="background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            <h2 style="color: #008080;">Solicitud de historia:</h2>
            <p>----------------------------------------------</p>
            <p class="comment" style="font-size: 1.2em; font-style: italic;">Este es un comentario de ejemplo que el administrador puede aprobar o denegar.</p>
            <p>----------------------------------------------</p>
        </div>

        <div class="action-buttons">
            <button class="btn btn-danger btn-lg" onclick="rejectComment()">Negar</button>
            <button class="btn btn-success btn-lg" onclick="approveComment()">Admitir</button>
        </div>

        <div class="alert alert-warning mt-4" role="alert">
            En caso de que se niegue la publicación, no se mostrará.
        </div>
    </div>
    
    <script>
        function rejectComment() {
            alert("Comentario rechazado.");
            // Aquí puedes agregar la lógica para manejar el rechazo
        }

        function approveComment() {
            alert("Comentario aprobado.");
            // Aquí puedes agregar la lógica para manejar la aprobación
        }

        function logout() {
            // Aquí puedes agregar la lógica para cerrar sesión
            alert("Sesión cerrada.");
        }
    </script>
</body>
</html>