@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Autos/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Autos/autos.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <div class="container my-5">
        <!-- Sección de Título Mejorada -->
        <div class="text-center mb-4">
            <h1 class="fw-bold text-primary">Autos Usados en MotosYamaha.pe</h1>
            <p class="text-muted">Explora nuestra selección de autos usados en excelentes condiciones y a precios
                competitivos.</p>
        </div>

        <div class="d-flex-wrapper">
            <!-- Barra lateral de filtros -->
            <div class="filters-column bg-white p-3 rounded shadow-sm">
                <form method="GET" action="{{ route('autos.usados') }}">
                    <h5 class="fw-bold text-success">Filtrar por</h5>
                    <hr>

                    <!-- Filtro de Marca -->
                    <div class="mb-3">
                        <label for="marca" class="form-label fw-bold">Marca</label>
                        <select class="form-select" id="marca" name="marca">
                            <option value="">Selecciona Marca</option>
                            @foreach ($marcas as $marca)
                                <option value="{{ $marca->marca }}"
                                    {{ request('marca') == $marca->marca ? 'selected' : '' }}>
                                    {{ $marca->marca }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Filtro de Precio en Rango -->
                    <div class="mb-3">
                        <label for="precio" class="form-label fw-bold">Precio</label>
                        <select class="form-select" id="precio" name="precio">
                            <option value="">Selecciona Rango</option>
                            <option value="5000" {{ request('precio') == '5000' ? 'selected' : '' }}>Hasta US$5,000
                            </option>
                            <option value="10000" {{ request('precio') == '10000' ? 'selected' : '' }}>US$5,000 a US$10,000
                            </option>
                            <option value="20000" {{ request('precio') == '20000' ? 'selected' : '' }}>US$10,000 a
                                US$20,000</option>
                            <option value="35000" {{ request('precio') == '35000' ? 'selected' : '' }}>US$20,000 a
                                US$35,000</option>
                            <option value="35000+" {{ request('precio') == '35000+' ? 'selected' : '' }}>US$35,000 o más
                            </option>
                        </select>
                    </div>

                    <!-- Filtro de Año en Rango -->
                    <div class="mb-3">
                        <label for="año" class="form-label fw-bold">Año</label>
                        <select class="form-select" id="año" name="año">
                            <option value="">Selecciona Año</option>
                            <option value="2020-2024" {{ request('año') == '2020-2024' ? 'selected' : '' }}>2020 a 2024
                            </option>
                            <option value="2015-2019" {{ request('año') == '2015-2019' ? 'selected' : '' }}>2015 a 2019
                            </option>
                            <option value="2010-2014" {{ request('año') == '2010-2014' ? 'selected' : '' }}>2010 a 2014
                            </option>
                            <option value="2005-2009" {{ request('año') == '2005-2009' ? 'selected' : '' }}>2005 a 2009
                            </option>
                            <option value="2000-2004" {{ request('año') == '2000-2004' ? 'selected' : '' }}>2000 a 2004
                            </option>
                            <option value="1999-" {{ request('año') == '1999-' ? 'selected' : '' }}>Hasta 1999</option>
                        </select>
                    </div>

                    <!-- Filtro de Kilometraje en Rango -->
                    <div class="mb-3">
                        <label for="kilometraje" class="form-label fw-bold">Kilometraje</label>
                        <select class="form-select" id="kilometraje" name="kilometraje">
                            <option value="">Selecciona Kilometraje</option>
                            <option value="20000" {{ request('kilometraje') == '20000' ? 'selected' : '' }}>Menos de
                                20,000 km</option>
                            <option value="40000" {{ request('kilometraje') == '40000' ? 'selected' : '' }}>20,000 -
                                40,000 km</option>
                            <option value="60000" {{ request('kilometraje') == '60000' ? 'selected' : '' }}>40,000 -
                                60,000 km</option>
                            <option value="80000" {{ request('kilometraje') == '80000' ? 'selected' : '' }}>60,000 -
                                80,000 km</option>
                            <option value="100000" {{ request('kilometraje') == '100000' ? 'selected' : '' }}>80,000 -
                                100,000 km</option>
                            <option value="100000+" {{ request('kilometraje') == '100000+' ? 'selected' : '' }}>Más de
                                100,000 km</option>
                        </select>
                    </div>

                    <!-- Filtro de Transmisión -->
                    <div class="mb-3">
                        <label for="transmision" class="form-label fw-bold">Transmisión</label>
                        <select class="form-select" id="transmision" name="transmision">
                            <option value="">Selecciona Transmisión</option>
                            <option value="Automática" {{ request('transmision') == 'Automática' ? 'selected' : '' }}>
                                Automática</option>
                            <option value="Manual" {{ request('transmision') == 'Manual' ? 'selected' : '' }}>Manual
                            </option>
                        </select>
                    </div>

                    <!-- Filtro de Tipo de Vehículo -->
                    <div class="mb-3">
                        <label for="tipo" class="form-label fw-bold">Tipo de Vehículo</label>
                        <select class="form-select" id="tipo" name="tipo">
                            <option value="">Selecciona Tipo</option>
                            <option value="sedan">Sedán</option>
                            <option value="hatchback">Hatchback</option>
                            <option value="suv">SUV</option>
                            <option value="pickup">Pick Up</option>
                            <option value="deportivo">Deportivo</option>
                            <option value="van">Van</option>
                        </select>
                    </div>

                    <!-- Filtro de Combustible -->
                    <div class="mb-3">
                        <label for="combustible" class="form-label fw-bold">Combustible</label>
                        <select class="form-select" id="combustible" name="combustible">
                            <option value="">Selecciona Combustible</option>
                            <option value="Gasolina">Gasolina</option>
                            <option value="Diesel">Diésel</option>
                            <option value="Híbrido">Híbrido</option>
                            <option value="Eléctrico">Eléctrico</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Filtrar</button>
                    <a href="{{ route('autos.usados') }}" class="btn btn-secondary w-100 mt-2">Limpiar Filtros</a>
                </form>
            </div>

            <!-- Listado de autos con nuevo diseño -->
            <div class="autos-listing">
                <div class="row">
                    @foreach ($autos as $auto)
                        <div class="col-md-4 mb-4">
                            <div class="card auto-card shadow-sm">
                                <!-- Carrusel de imágenes dentro de la tarjeta -->
                                <div id="carousel{{ $auto->id }}" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($auto->imagenes as $index => $imagen)
                                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                <img src="{{ asset($imagen->url) }}" class="d-block w-100"
                                                    alt="{{ $auto->marca }} {{ $auto->modelo }}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carousel{{ $auto->id }}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carousel{{ $auto->id }}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </button>
                                </div>

                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $auto->marca }} {{ $auto->modelo }}</h5>
                                    <p class="text-muted">{{ $auto->año }} • {{ number_format($auto->kilometraje) }}
                                        kms</p>
                                    <p class="text-success fw-bold">US${{ number_format($auto->precio, 2) }}</p>
                                    <button class="btn btn-primary btn-ver-detalles" data-id="{{ $auto->id }}">Ver
                                        detalles</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Paginación optimizada -->
                <div class="mt-4 d-flex justify-content-center pagination-container">
                    {!! $autos->onEachSide(1)->links('vendor.pagination.bootstrap-4') !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Call-to-Action Optimizado -->
    <div class="bg-light text-center p-4 mt-5 rounded shadow-sm">
        <h2 class="fw-bold">¿No encuentras el auto que buscas?</h2>
        <p class="text-muted">Contáctanos y te ayudaremos a encontrar el auto ideal para ti.</p>
        <a href="/contacto" class="btn btn-primary btn-lg">Contáctanos</a>
    </div>

    <!-- Panel Pop-up -->
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

    <!-- Script para el Pop-up -->
    <!-- Script para mostrar popup -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const panel = document.querySelector('.popup-panel');
            const overlay = document.querySelector('.popup-overlay');

            document.querySelectorAll('.btn-ver-detalles').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    const autoId = button.getAttribute('data-id');

                    fetch(`/autos/${autoId}`)
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById('popupTitle').textContent =
                                `${data.marca} ${data.modelo}`;
                            document.getElementById('popupImage').src = data.imagen_url;
                            document.getElementById('popupPrice').textContent =
                                `Precio: US$${data.precio}`;
                            document.getElementById('popupYear').textContent =
                                `Año: ${data.año}`;
                            document.getElementById('popupDescription').textContent =
                                `Descripción: ${data.descripcion}`;

                            panel.style.display = 'block';
                            overlay.style.display = 'block';
                        })
                        .catch(error => alert('No se pudieron cargar los detalles del auto.'));
                });
            });

            document.querySelector('.btn-close-panel').addEventListener('click', function() {
                panel.style.display = 'none';
                overlay.style.display = 'none';
            });
        });
    </script>
