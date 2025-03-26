@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Autos/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Autos/autos.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const panel = document.querySelector('.popup-panel');
            const overlay = document.querySelector('.popup-overlay');
            const closeButton = document.querySelector('.btn-close-panel');

            document.querySelectorAll('.btn-ver-detalles').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    const autoId = button.getAttribute('data-id');

                    fetch(`/autos/${autoId}`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Error al obtener los detalles del auto.');
                            }
                            return response.json();
                        })
                        .then(data => {
                            document.getElementById('popupTitle').textContent =
                                `${data.marca} ${data.modelo}`;
                            document.getElementById('popupImage').src = `/${data.imagen_url}`;
                            document.getElementById('popupPrice').textContent =
                                `Precio: US$${data.precio}`;
                            document.getElementById('popupYear').textContent =
                                `Año: ${data.año}`;
                            document.getElementById('popupDescription').textContent =
                                `Descripción: ${data.descripcion}`;

                            panel.style.display = 'block';
                            overlay.style.display = 'block';
                        })
                        .catch(error => {
                            console.error('Error al cargar los detalles del auto:', error);
                            alert('No se pudieron cargar los detalles del auto.');
                        });
                });
            });

            closeButton.addEventListener('click', function() {
                panel.style.display = 'none';
                overlay.style.display = 'none';
            });

            overlay.addEventListener('click', function() {
                panel.style.display = 'none';
                overlay.style.display = 'none';
            });
        });
    </script>

    <div class="container my-5">
        <!-- Mensaje de Presentación -->
        <div class="text-center mb-4">
            <h1 class="fw-bold">Autos Nuevos en MotosYamaha.pe</h1>
            <p class="text-muted">Encuentra los mejores autos nuevos del mercado con garantía y sin kilometraje.</p>
        </div>

        <!-- Slider Destacado -->
        <div id="featuredAutosCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($autos->take(2) as $index => $auto)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img src="{{ asset($auto->imagen_url) }}" class="img-fluid"
                            alt="{{ $auto->marca }} {{ $auto->modelo }}">
                        <div class="carousel-caption d-none d-md-block"
                            style="background-color: rgba(0, 0, 0, 0.6); padding: 10px; border-radius: 5px;">
                            <h5 class="text-white">Promoción Especial</h5>
                            <p class="text-white">{{ $auto->descripcion }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#featuredAutosCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#featuredAutosCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>

        <!-- Listado de autos nuevos -->
        <div class="autos-listing">
            <div class="row">
                @foreach ($autos as $auto)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="{{ asset($auto->imagen_url) }}" class="card-img-top"
                                alt="{{ $auto->marca }} {{ $auto->modelo }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $auto->marca }} {{ $auto->modelo }}</h5>
                                <p class="card-text">Precio: US${{ number_format($auto->precio, 2) }}</p>
                                <p class="text-success fw-bold">Estado: Nuevo</p>
                                <p class="text-muted">Kilometraje: 0 km</p>
                                <button class="btn btn-primary btn-ver-detalles" data-id="{{ $auto->id }}">Ver
                                    detalles</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Listado de autos -->
            <div class="autos-listing">
                <div class="row">
                    @foreach ($autos as $auto)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="car-contain">
                                    <img src="{{ asset($auto->imagen_url) }}" class="card-img-top"
                                    alt="{{ $auto->marca }} {{ $auto->modelo }}">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $auto->marca }} {{ $auto->modelo }}</h5>
                                    <p class="card-text">Desde: US${{ number_format($auto->precio, 2) }}</p>
                                    <button class="btn btn-primary btn-ver-detalles" data-id="{{ $auto->id }}">Ver
                                        detalles</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            <!-- Paginación -->
            <div class="mt-4">
                {{ $autos->links() }}
            </div>
        </div>
    </div>

    <!-- Overlay y Panel Pop-up -->
    <div class="popup-overlay"></div>
    <div class="popup-panel">
        <h5 id="popupTitle" class="text-center"></h5>
        <img id="popupImage" class="img-fluid mb-3" alt="Imagen del auto">
        <p id="popupPrice"><strong>Precio:</strong></p>
        <p id="popupYear"><strong>Año:</strong></p>
        <p id="popupDescription"><strong>Descripción:</strong></p>
        <div class="d-flex">
            <button class="btn btn-secondary btn-close-panel me-2">Cerrar</button>
            <a href="/servicios" class="btn btn-primary">Cotizar</a>
        </div>
    </div>

    <!-- Call-to-Action Personalizado -->
    <div class="bg-light text-center p-4 mt-5">
        <h2 class="fw-bold">¿No encuentras el auto que buscas?</h2>
        <p class="text-muted">Contáctanos y te ayudaremos a encontrar el auto ideal para ti.</p>
        <a href="/contacto" class="btn btn-primary btn-lg">Contáctanos</a>
    </div>
