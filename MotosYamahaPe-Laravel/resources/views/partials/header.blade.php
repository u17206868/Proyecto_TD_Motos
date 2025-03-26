<link rel="stylesheet" href="{{ asset('css/Partials/Header.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>


<header style="margin-bottom: 0">
    <nav class="navbar navbar-expand-lg p-2 bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo3.webp') }}" alt="Logo" />
            </a>
            <button class="navbar-toggler navbar-dark bg-dark" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex search-container mx-auto" role="search" action="{{ route('buscar') }}" method="GET">
                    <div class="btn-group me-2" role="group">
                        <button type="button" class="btn btn-outline-light btn-tipo active"
                            data-tipo="autos">Autos</button>
                        <button type="button" class="btn btn-outline-light btn-tipo" data-tipo="motos">Motos</button>
                    </div>
                    <input type="hidden" id="tipoBusqueda" name="tipo" value="autos">
                    <input class="form-control me-3 bg-white" type="text" name="q"
                        placeholder="Buscar por marca o modelo" aria-label="Buscar" value="{{ request('q') }}"
                        required />
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <ul class="navbar-nav user-items me-4 mb-2 mb-lg-0">
                    @if (Session::has('usuario_id'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white fw-bold d-flex align-items-center"
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-person-circle me-2"></i> Bienvenido,
                                {{ Session::get('usuario_nombre') }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ route('perfil') }}">
                                        <i class="bi bi-person me-2"></i> Mi Perfil
                                    </a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="dropdown-item d-flex align-items-center">
                                            <i class="bi bi-box-arrow-right me-2"></i> Cerrar Sesión
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">Regístrate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary fw-bold" href="{{ route('login') }}">Ingresa</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Nueva sección de información debajo del nav -->
    <div class="datos bg-secondary">
        <div class="container mt-0">
            <div class="row">
                <div class="col">
                    <div class="sect-container d-flex">
                        <div class="dropdown me-3">
                        <span class="text-white fw-bold dropdown-toggle no-click" id="autosDropdown">
                        Autos
                        </span>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="autosDropdown">
                                <li><a class="dropdown-item" href="{{ route('autos.nuevos') }}">Nuevos</a></li>
                                <li><a class="dropdown-item" href="{{ route('autos.usados') }}">Usados</a></li>
                            </ul>
                        </div>

                        <div class="dropdown me-3">
                        <span class="text-white fw-bold dropdown-toggle no-click" id="motosDropdown">
                        Motos
                        </span>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="motosDropdown">
                                <li><a class="dropdown-item"
                                        href="{{ route('motos.index', ['tipo' => 'nuevas']) }}">Nuevas</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('motos.index', ['tipo' => 'usadas']) }}">Usadas</a></li>
                            </ul>
                        </div>

                        <button type="button" class="btn text-white fw-bold btn-categoria me-3" data-route="{{ route('servicios.index') }}">Servicios</button>
                        <button type="button" class="btn text-white fw-bold btn-categoria me-3" data-route="{{ route('noticias') }}">Noticias</button>
                        <button type="button" class="btn text-white fw-bold btn-categoria" data-route="{{ route('contacto') }}">Contáctanos</button>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tipoInput = document.getElementById('tipoBusqueda');
        const tipoButtons = document.querySelectorAll('.btn-tipo');
        const categoriaButtons = document.querySelectorAll('.btn-categoria');
        const dropdowns = document.querySelectorAll('.dropdown');
        const noClickElements = document.querySelectorAll('.no-click');

        tipoButtons.forEach(button => {
            button.addEventListener('click', () => {
                tipoButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                tipoInput.value = button.getAttribute('data-tipo');
            });
        });
        categoriaButtons.forEach(button => {
            button.addEventListener('click', () => {
                window.location.href = button.dataset.route;
            });
        });
        noClickElements.forEach(element => {
            element.addEventListener('click', (event) => {
                event.preventDefault(); 
            });
        });
        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('mouseenter', () => {
                const dropdownMenu = dropdown.querySelector('.dropdown-menu');
                dropdownMenu.style.display = 'block';
        });
        dropdown.addEventListener('mouseleave', () => {
            const dropdownMenu = dropdown.querySelector('.dropdown-menu');
            dropdownMenu.style.display = 'none';
    });
    });
});
</script>
