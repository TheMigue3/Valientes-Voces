<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Qué es un oncólogo especializado en cáncer de ovario?</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
</head>
<body>

<!-- Carrusel -->
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

<h1 class="text-center mt-4">¿Qué es un oncólogo especializado en cáncer de ovario?</h1>
<p class="text-center">El cáncer de ovario no discrimina, pero la información puede marcar la diferencia.</p>

<!-- Galería de imágenes en círculos -->
<div class="gallery text-center">
    <img src="{{ asset('img/inicio1.jpg') }}" alt="hola">
    <img src="{{ asset('img/inicio2.jpg') }}" alt="Descripción 5">
    <img src="{{ asset('img/inicio3.jpg') }}" alt="Descripción 6">
    <img src="{{ asset('img/inicio4.jpg') }}" alt="Descripción 7">
    <img src="{{ asset('img/inicio5.jpg') }}" alt="Descripción 7">
</div>

<!-- Nueva sección de información con imagen a la izquierda -->
<div class="info-section d-flex align-items-start flex-column flex-md-row mt-5">
    <img src="{{ asset('img/Oncologo.jpg') }}" alt="Información" class="info-image">
    <div class="info-text">
        <h2>Descubre Todo Sobre ¿Qué es un oncólogo especializado en cáncer de ovario?</h2>
      <p>Un oncólogo especializado en cáncer de ovario es un médico que se dedica al diagnóstico, tratamiento y seguimiento de este tipo de cáncer. Su conocimiento abarca tanto los aspectos médicos como quirúrgicos necesarios para abordar esta enfermedad en sus diversas etapas.</p>
    </div>
</div>

<div class="info-section d-flex align-items-start flex-column flex-md-row mt-5">
    <div class="info-text">
        <h2>Tipos de oncólogos que te pueden ayudar</h2>
        <p>Oncólogo ginecológico</p>
        <p>Oncólogo médico</p>
        <p>Oncólogo radioterapeuta</p>
    </div>
    <img src="{{ asset('img/Oncologo1.jpg') }}" alt="Información" class="info-image">
</div>
<!-- Scripts de Bootstrap y tu archivo JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/js.js"></script> <!-- Asegúrate de que este archivo contenga el código de inicialización del calendario -->

</body>
</html>