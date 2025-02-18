<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Día Mundial del Cáncer de Ovario</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" rel="stylesheet" />
</head>
<body>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/carrusel1.jpg') }}" class="d-block w-100" alt="Descripción 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carrusel2.jpg') }}" class="d-block w-100" alt="Descripción 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carrusel3.jpg') }}" class="d-block w-100" alt="Descripción 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container mt-4">
        <h1 class="text-center">Día Mundial del Cáncer de Ovario</h1>
        <p class="text-center">Tu historia puede ser la luz que inspire a alguien más a seguir adelante.</p>

        <!-- Sección para compartir historias -->
        <div class="stories-section">
            <h2>Comparte tu Historia</h2>
            <p>Tu experiencia puede inspirar a otras personas.</p>

            <div class="story-input">
                <textarea placeholder="Escribe tu historia aquí..." class="story-input-field"></textarea>
                <button class="btn-submit-story">Enviar Historia</button>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>