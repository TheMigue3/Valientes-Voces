
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-teal p-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/ribbon.png') }}" alt="Lazo" class="me-2" height="30">
                Voces Valientes
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cancer.ovario') }}">Entendiendo el Cáncer de Ovario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('historias') }}">Historias que Inspiran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('apoyo') }}">Apoyo y Recursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('equipo') }}">Tu Equipo Médico</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

   


