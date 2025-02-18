<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Día Mundial del Cáncer de Ovario</title>
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

<h1 class="text-center mt-4">Día Mundial del Cáncer de Ovario</h1>
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
    <img src="{{ asset('img/flayer.jpg') }}" alt="Información" class="info-image">
    <div class="info-text">
        <h2>Descubre Todo Sobre el Cáncer de Ovario: Información, Apoyo y Esperanza</h2>
      <p>El cáncer de ovario es una de las enfermedades más desafiantes para las mujeres, pero no estás sola en este camino. Aunque sus síntomas pueden ser silenciosos y difíciles de detectar, es crucial conocer las señales y los factores de riesgo. Aquí te ofrecemos información clara y útil sobre el cáncer de ovario, cómo identificarlo a tiempo, y las opciones de tratamiento disponibles.</p>
      <p>Además, esta página no solo es un espacio para aprender, sino también para compartir. Te invitamos a conocer los testimonios de mujeres valientes que han enfrentado esta batalla, sus experiencias, y cómo han superado los momentos más difíciles. También encontrarás una lista de centros especializados en el tratamiento del cáncer de ovario, donde podrás recibir la atención que mereces.</p>
      <p>Juntas, podemos crear conciencia, brindar apoyo y ofrecer esperanza a todas las que luchan contra el cáncer de ovario. ¡Tu historia también puede inspirar a otras</p>
    </div>
</div>


<!-- Nueva sección de información con imagen a la derecho -->
<div class="info-section d-flex align-items-start flex-column flex-md-row mt-5">
    <div class="info-text">
        <h2>Día Mundial del Cáncer de Ovario</h2>
        <p>El Día Mundial del Cáncer de Ovarios, reconocido el 8 de mayo de cada año desde 2013, es una iniciativa de la Coalición Mundial contra el Cáncer de Ovarios, una organización que es un socio estratégico oficial de defensa del IGCS y un aliado clave dentro de la Red Internacional de Defensa del Cáncer Ginecológico.</p>
    </div>
    <img src="{{ asset('img/dia.jpg') }}" alt="Información" class="info-image">
</div>



<!-- Scripts de Bootstrap y tu archivo JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/js.js"></script> <!-- Asegúrate de que este archivo contenga el código de inicialización del calendario -->

</body>
</html>