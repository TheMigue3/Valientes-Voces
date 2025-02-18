<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Cómo apoyar la lucha contra el cáncer?</title>
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

<h1 class="text-center mt-4">¿Cómo apoyar la lucha contra el cáncer?</h1>
<p class="text-center">La gente con cáncer requiere de apoyo e información, sin importar la etapa en la que se encuentre la enfermedad</p>

<!-- Galería de imágenes en círculos -->
<div class="gallery text-center">
    <img src="{{ asset('img/imagen1.1.jpg') }}" alt="hola">
    <img src="{{ asset('img/imagen1.2.jpg') }}" alt="Descripción 5">
    <img src="{{ asset('img/imagen1.3.jpg') }}" alt="Descripción 6">
    <img src="{{ asset('img/imagen1.4.jpg') }}" alt="Descripción 7">
    <img src="{{ asset('img/inicio5.jpg') }}" alt="Descripción 7">
</div>

<!-- Nueva sección de información con imagen a la izquierda -->
<div class="info-section d-flex align-items-start flex-column flex-md-row mt-5">
    <img src="{{ asset('img/flayer.jpg') }}" alt="Información" class="info-image">
    <div class="info-text">
        <h2>Todos estamos aquí para ayudarnos unos a otros. Cuando estamos juntos, podemos cumplir cualquier cosa</h2>
      <p>El saber sobre todas las opciones de tratamiento y en dónde encontrar los recursos disponibles que necesita le ayudará a tomar decisiones informadas en relación con su atención médica. Puede que usted tenga a su alcance varios programas y servicios de apoyo, lo cual puede conformar una parte importante de su atención.</p>
      <p> Entre estos se podría inculir servicios de enfermería o de un trabajador social, ayuda financiera, asesoría nutricional, servicios de rehabilitacion e incluso apoyo espiritual.</p>
      <p>"No sabemos lo fuertes que somos hasta que ser fuertes es la única opción que tenemos."</p>
    </div>
</div>

<div class="info-section d-flex align-items-start flex-column flex-md-row mt-5">
    <div class="info-text">
        <h2>¿Como apoya el IMSS a personas con cáncer?</h2>
        <p>El Instituto Mexicano del Seguro Social (IMSS) brinda diagnóstico y tratamiento oportuno a mujeres que desarrollan ovario poliquístico, padecimiento que además de provocar alteraciones hormonales, está relacionado con la resistencia a la insulina, la cual es detonante de problemas para dormir, sobrepeso, e incluso diabetes e hipertensión.</p>
        <p>El especialista del IMSS refirió que en el Hospital de Oncología se cuenta con equipos de trabajo de alta especialización en la evaluación, diagnóstico por patología y laboratorio oncológico, así como tratamiento con cirugía oncológica, quimioterapia, terapia personalizada y radioterapia de última generación.</p>
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