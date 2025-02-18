<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<!-- Nueva sección de información con imagen a la izquierda -->
<div class="info-section d-flex align-items-start flex-column flex-md-row mt-5">
    <img src="{{ asset('img/tipo2.jpg') }}" alt="Información" class="info-image">
    <div class="info-text">
        <h2>¿QUÉ ES?</h2>
      <p>El cáncer se origina cuando las células en el cuerpo comienzan a crecer en forma descontrolada. Las células de casi cualquier parte del cuerpo pueden convertirse en cáncer y propagarse. Para conocer más sobre el origen y la propagación del cáncer, consulte ¿Qué es el cáncer?.</p>
      <h2>TIPOS</h2>
      <p>Cada tipo de célula se puede desarrollar en un tipo diferente de tumor:</p>
      <p>Los tumores epiteliales se originan de las células que cubren la superficie externa del ovario. La mayoría de los tumores ováricos son tumores de células epiteliales.</p>
      <p>Los tumores de células germinales se originan de las células que producen los óvulos.</p>
      <p>Los tumores del estroma se originan de las células del tejido estructural que sostienen el ovario y producen las hormonas femeninas estrógeno y progesterona.</p>
    </div>
</div>
<!-- Nueva sección de información con imagen a la derecha -->
<div class="info-section d-flex align-items-start flex-column flex-md-row mt-5">
    <div class="info-text">
        <h2>Tumores ováricos epiteliales</h2>
        <p>Los tumores ováricos epiteliales se originan en la superficie externa de los ovarios. Estos tumores pueden ser benignos (no cáncer), de escasa malignidad (bajo potencial maligno), o maligno (cáncer).</p>
        <h2>Tumores ováricos epiteliales benignos</h2>
        <p>Los tumores ováricos epiteliales que son benignos, no se propagan y generalmente no conducen a enfermedades graves. Existen varios tipos de tumores epiteliales benignos, incluyendo los cistoadenomas serosos, los cistoadenomas mucinosos y los tumores de Brenner.</p>
        <h2>Tumores epiteliales de escasa malignidad</h2>
        <p>Cuando se observan al microscopio, algunos tumores ováricos epiteliales no se ven claramente como cancerosos y se conocen como cáncer ovárico epitelial de escasa malignidad (limítrofe). Los dos tipos más comunes son carcinoma seroso proliferativo atípico y carcinoma mucinoso proliferativo atípico. A estos tumores se les conocía como tumores de bajo potencial maligno.</p>
        <p>Los tumores limítrofes tienden a afectar a las mujeres más jóvenes en comparación con los cánceres ováricos típicos. Estos tumores crecen lentamente y tienen menos probabilidades de causar la muerte que la mayoría de los cánceres de ovario.</p>
        </div>
        <img src="{{ asset('img/tipos.jpg') }}" alt="Información" class="info-image">
</div>
<!-- Nueva sección de información con imagen a la izquierda -->
<div class="info-section d-flex align-items-start flex-column flex-md-row mt-5">
    <img src="{{ asset('img/tipo3.jpg') }}" alt="Información" class="info-image">
    <div class="info-text">
        <h2>Tumores ováricos epiteliales malignos</h2>
        <p>Los tumores epiteliales cancerosos reciben el nombre de carcinomas. Aproximadamente de 85 a 90% de los cánceres de ovario malignos son carcinomas ováricos epiteliales. Estas células del tumor presentan varias características (cuando se examinan en el laboratorio) que se pueden utilizar para clasificar a los carcinomas ováricos epiteliales en diferentes tipos. El tipo seroso es por mucho el más común y puede incluir tumores de bajo grado y de alto grado. </p>
        <p>Los otros tipos principales incluyen mucinoso, endometroidey el de células claras.</p>
        <p>Carcinomas serosos (52%)</p>
        <p>Carcinoma de células claras (6%)</p>
        <p>Carcinoma mucinoso (6%)</p>
        <p>Carcinoma endometroide (10%)</p>
        <h2>Tumores ováricos de células germinales</h2>
        <p>Las células germinales usualmente forman los óvulos en las mujeres y los espermatozoides en los hombres. La mayoría de los tumores ováricos de células germinales son benignos, aunque algunos son cancerosos y pueden poner en riesgo la vida. Menos del 2% de los cánceres de ovario son de origen de células germinales. En general, tienen un buen pronóstico, con más de nueve de cada 10 pacientes sobreviviendo al menos 5 años después del diagnóstico. Existen varios subtipos de tumores de células germinales. Los tumores de células germinales más comunes son teratomas, disgerminomas, tumores del seno endodérmico y coriocarcinomas. Los tumores de células germinales también pueden ser una mezcla de más de un solo subtipo.</p>
        </div>
</div>
<!-- Nueva sección de información con imagen a la derecha -->
<div class="info-section d-flex align-items-start flex-column flex-md-row mt-5">
    <div class="info-text">
        <h2>Tumores ováricos estromales</h2>
        <p>Aproximadamente el 1% de los cánceres de ovario son tumores de células estromales. Más de la mitad de los tumores del estroma se presentan en mujeres mayores de 50 años, pero alrededor del 5% de los tumores del estroma ocurren en las niñas.</p>
        <p>El síntoma más común de estos tumores es el sangrado vaginal anormal. Esto ocurre porque muchos de estos tumores producen hormonas femeninas (estrógeno). Estas hormonas pueden causar sangrado vaginal (como un periodo) que comienza de nuevo después de la menopausia. También pueden causar periodos menstruales y desarrollo de los senos en las niñas antes de la pubertad.</p>
        <h2>Quistes ováricos</h2>
        <p>Un quiste ovárico es una acumulación de líquido dentro de un ovario. La mayoría de los quistes ováricos ocurren como una parte normal del proceso de ovulación (liberación de óvulos). Éstos son llamados quistes funcionales. Estos quistes usualmente desaparecen dentro de varios meses sin ningún tratamiento. Si usted presenta un quiste, puede que su médico quiera examinarlo nuevamente después de su próximo ciclo (periodo) menstrual para saber si se redujo el tamaño del quiste.</p>
        <p>Un quiste ovárico puede causar más preocupación en una mujer que no está ovulando (como una mujer después de la menopausia o una niña que no ha comenzado sus periodos), y puede que el médico quiera hacer más pruebas. El médico también puede ordenar otras pruebas si el quiste es grande o si no desaparece en algunos meses. Aun cuando la mayoría de estos quistes son benignos (no cancerosos), un número reducido de éstos podría ser canceroso. Algunas veces, la única forma de saber con certeza si el quiste es canceroso es extirpándolo mediante cirugía. Los quistes que parecen ser benignos (según la apariencia de éstos en los estudios por imágenes) se pueden mantener bajo observación (con exámenes físicos y estudios por imágenes repetidos), o extirpar mediante cirugía.</p>
    </div>
    <img src="{{ asset('img/tipo4.jpg') }}" alt="Información" class="info-image">
</div>
<!-- Scripts de Bootstrap y tu archivo JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/js.js"></script> <!-- Asegúrate de que este archivo contenga el código de inicialización del calendario -->

</body>
</html>