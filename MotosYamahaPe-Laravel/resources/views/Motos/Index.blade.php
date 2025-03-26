@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Motos/motos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Motos/responsive.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const panel = document.querySelector('.popup-panel');
            const overlay = document.querySelector('.popup-overlay');
            const closeButton = document.querySelector('.btn-close-panel');
            const cotizarButton = document.getElementById('btnCotizar');

            document.querySelectorAll('.btn-ver-detalles').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    const motoId = button.getAttribute('data-id');

                    fetch(`/motos/${motoId}`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Error al cargar los detalles.');
                            }
                            return response.json();
                        })
                        .then(data => {
                            document.getElementById('popupTitle').textContent =
                                `${data.marca} ${data.modelo}`;
                            document.getElementById('popupImage').src = data.imagen_url;
                            document.getElementById('popupPrice').textContent =
                                `Precio: $${data.precio}`;
                            document.getElementById('popupYear').textContent =
                                `Año: ${data.año}`;
                            document.getElementById('popupDescription').textContent =
                                `Descripción: ${data.descripcion}`;

        let carrito = new Set(JSON.parse(localStorage.getItem('motosCarrito')) || []);

    function actualizarContadorCarrito() {
        document.getElementById('carritoCounter').textContent = `Carrito: ${carrito.size}`;
    }

        function toggleFavorito(id) {
            if (favoritos.has(id)) {
                favoritos.delete(id);
            } else {
                favoritos.add(id);
            }
            localStorage.setItem('motosFavoritas', JSON.stringify([...favoritos]));
            actualizarContadorFavoritos();
            // Actualizar el botón de favorito
            const btn = document.querySelector(`button[data-moto-id="${id}"]`);
            if (btn) {
                btn.classList.toggle('active');
                btn.innerHTML = favoritos.has(id) ? '❤️' : '🤍';
            }
        }

        function toggleCarrito(id) {
        if (carrito.has(id)) {
            carrito.delete(id);
        } else {
            carrito.add(id);
        }
        localStorage.setItem('motosCarrito', JSON.stringify([...carrito]));
        actualizarContadorCarrito();

        // Actualizar el ícono del carrito
        const btn = document.querySelector(`button[data-cart-id="${id}"]`);
        if (btn) {
            btn.classList.toggle('active');
            btn.innerHTML = carrito.has(id) ? '🛒' : '➕';
        }
    }

        function limpiarErrores() {
            document.getElementById("errorMarca").textContent = "";
            document.getElementById("errorModelo").textContent = "";
            document.getElementById("errorAñoDesde").textContent = "";
            document.getElementById("errorAñoHasta").textContent = "";
            document.getElementById("errorGeneral").classList.add("d-none");
        }

        function validarFormulario() {
            limpiarErrores();
            
            const marca = document.getElementById("marcaFilter").value;
            const modelo = document.getElementById("modeloFilter").value;
            const añoDesde = document.getElementById("añoDesde").value;
            const añoHasta = document.getElementById("añoHasta").value;
            const soloFavoritos = document.getElementById("soloFavoritos").checked;
            
            let hayAlgunCampoLleno = marca || modelo || añoDesde || añoHasta || soloFavoritos;

            if (!hayAlgunCampoLleno) {
                document.getElementById("errorGeneral").classList.remove("d-none");
                return false;
            }

            if (añoDesde && añoHasta) {
                if (parseInt(añoDesde) > parseInt(añoHasta)) {
                    document.getElementById("errorAñoDesde").textContent = "El año 'Desde' no puede ser mayor que el año 'Hasta'";
                    return false;
                }
            }

            return true;
        }

        function mostrarMotos(listaMotos) {
    const container = document.getElementById("motosContainer");
    container.innerHTML = "";
    
    if (listaMotos.length === 0) {
        container.innerHTML = '<div class="col-12"><p class="text-center">No se encontraron motos que coincidan con los filtros seleccionados.</p></div>';
        return;
    }

    listaMotos.forEach(moto => {
        const motoElement = document.createElement("div");
        motoElement.classList.add("col-md-4", "mb-3");
        const esFavorito = favoritos.has(moto.id);
        const enCarrito = carrito.has(moto.id);
        motoElement.innerHTML = `
            <div class="card p-3">
                <div class="icon-buttons">
                    <button class="favorite-btn ${esFavorito ? 'active' : ''}" onclick="toggleFavorito(${moto.id})" data-moto-id="${moto.id}">
                        ${esFavorito ? '❤️' : '🤍'}
                    </button>
                    <button class="cart-btn ${enCarrito ? 'active' : ''}" onclick="toggleCarrito(${moto.id})" data-cart-id="${moto.id}">
                        ${enCarrito ? '🛒' : '➕'}
                    </button>
                </div>
                <img src="${moto.imagen}" class="card-img-top" alt="${moto.marca} ${moto.modelo}">
                <h5>${moto.marca} ${moto.modelo}</h5>
                <p>Año: ${moto.año}</p>
                <p><strong>Precio: $${moto.precio.toLocaleString()}</strong></p>
                <button class="btn btn-info" onclick="verDetalles('${moto.marca}', '${moto.modelo}', ${moto.año}, '${moto.imagen}', '${moto.descripcion}')" data-bs-toggle="modal" data-bs-target="#detallesModal">Detalles</button>
            </div>
        `;
        container.appendChild(motoElement);
    });
}



    document.addEventListener("DOMContentLoaded", () => {
        actualizarContadorCarrito();
    });

    const motosRecomendadas = motos.filter(moto => favoritos.has(moto.id));

    function verDetalles(marca, modelo, año, imagen, descripcion) {
    document.getElementById("detallesContenido").innerHTML = `
        <img src="${imagen}" class="img-fluid mb-3" alt="${marca} ${modelo}">
        <h5>${marca} ${modelo}</h5>
        <p><strong>Año:</strong> ${año}</p>
        <p>${descripcion}</p>
        
        <!-- Sección de motos recomendadas -->
        <h5 class="mt-4">Motos Recomendadas</h5>
        <div class="row">
            ${motosRecomendadas.map(moto => `
                <div class="col-md-3">
                    <div class="card">
                        <img src="${moto.imagen}" class="card-img-top" alt="${moto.marca} ${moto.modelo}">
                        <div class="card-body">
                            <h6 class="card-title">${moto.marca} ${moto.modelo}</h6>
                            <p class="card-text">$${moto.precio.toLocaleString()}</p>
                            <button class="btn btn-info" type="button" onclick="verDetalles('${moto.marca}', '${moto.modelo}', ${moto.año}, '${moto.imagen}', '${moto.descripcion}')" data-bs-toggle="modal" data-bs-target="#detallesModal">Detalles</button>
                        </div>
                    </div>
                </div>
            `).join('')}
        </div>
    `;
}


//function mostrarDetalles(marca, modelo, año, imagen, descripcion) {
    //verDetalles(marca, modelo, año, imagen, descripcion);
    // Evitar desplazamiento automático hacia el inicio
  //  window.history.pushState({}, "", window.location.href);  // Cambia la URL sin recargar la página
//}

        function actualizarModelos() {
            const marcaSeleccionada = document.getElementById("marcaFilter").value;
            const modeloFilter = document.getElementById("modeloFilter");
            modeloFilter.innerHTML = '<option value="">Selecciona Modelo</option>';
            
            if (marcaSeleccionada) {
                const modelosDisponibles = [...new Set(motos
                    .filter(moto => moto.marca === marcaSeleccionada)
                    .map(moto => moto.modelo))];
                
                modelosDisponibles.forEach(modelo => {
                    const option = document.createElement("option");
                    option.value = modelo;
                    option.textContent = modelo;
                    modeloFilter.appendChild(option);
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

            cotizarButton.addEventListener('click', function() {
                window.location.href = '/servicios';
            });
        });



        function mostrarCarrito() {
    const carritoContenido = document.getElementById("carritoContenido");
    carritoContenido.innerHTML = "";

    if (carrito.size === 0) {
        carritoContenido.innerHTML = "<p>Tu carrito está vacío.</p>";
        return;
    }

    let total = 0;
    carrito.forEach(id => {
        const moto = motos.find(m => m.id === id);
        if (moto) {
            total += moto.precio;
            carritoContenido.innerHTML += `
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <div>
                        <img src="${moto.imagen}" alt="${moto.marca} ${moto.modelo}" style="width: 50px; height: 50px;">
                        <span>${moto.marca} ${moto.modelo}</span>
                    </div>
                    <div>
                        <strong>$${moto.precio.toLocaleString()}</strong>
                        <button class="btn btn-danger btn-sm" onclick="eliminarDelCarrito(${moto.id})">❌</button>
                    </div>
                </div>
            `;
        }
    });

    carritoContenido.innerHTML += `<hr><h5>Total: $${total.toLocaleString()}</h5>`;
}
function eliminarDelCarrito(id) {
    carrito.delete(id);
    localStorage.setItem('motosCarrito', JSON.stringify([...carrito]));
    actualizarContadorCarrito();
    mostrarCarrito();
}


    function eliminarDelCarrito(id) {
        carrito.delete(id);
        localStorage.setItem('motosCarrito', JSON.stringify([...carrito]));
        actualizarContadorCarrito();
        mostrarCarrito();
    }

    function comprarMotos() {
        if (carrito.size === 0) {
            alert("Tu carrito está vacío.");
            return;
        }
        alert("¡Compra realizada con éxito!");
        carrito.clear();
        localStorage.removeItem("motosCarrito");
        actualizarContadorCarrito();
        mostrarCarrito();
    }

    document.addEventListener("DOMContentLoaded", () => {
        mostrarCarrito();
    });

    
    
        
    </script>

    <div class="container my-5">

        <!-- Mensaje de Presentación -->
        <div class="text-center title-container  mb-4">
            <h1 class="">🏍️ Bienvenido a la Tienda de Motos de MotosYamaha.pe 🏍️</h1>
            <p class="text-muted">Encuentra las mejores motos nuevas y usadas al mejor precio, seleccionadas especialmente
                para ti.</p>
        </div>

        <!-- Slider -->
        <div id="featuredMotosCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($motos->take(3) as $index => $moto)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img src="{{ asset($moto->imagen_url) }}" class="img-fluid"
                            alt="{{ $moto->marca }} {{ $moto->modelo }}">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-2 rounded">
                            <h5 class="text-white">{{ $moto->modelo }}</h5>
                            <p class="text-white">Desde ${{ number_format($moto->precio, 2) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#featuredMotosCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#featuredMotosCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>

        <div class="d-flex-wrapper container-motos">
            <!-- Filtros -->
            <div class="filters-column">
                <form method="GET" action="{{ route('motos.index') }}">
                    <h5>Filtrar por</h5>
                    <div class="mb-3">
                        <label class="form-label">Marca</label>
                        <select class="form-select" name="marca">
                            <option value="">Selecciona Marca</option>
                            @foreach ($marcas as $marca)
                                <option value="{{ $marca->marca }}">{{ $marca->marca }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Modelo</label>
                        <select class="form-select" name="modelo">
                            <option value="">Selecciona Modelo</option>
                            @foreach ($modelos as $modelo)
                                <option value="{{ $modelo->modelo }}">{{ $modelo->modelo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Año</label>
                        <div class="row g-2">
                            <div class="col">
                                <input type="number" name="año_desde" class="form-control" placeholder="Desde">
                            </div>
                            <div class="col">
                                <input type="number" name="año_hasta" class="form-control" placeholder="Hasta">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio</label>
                        <input type="number" class="form-control" name="precio" placeholder="Máximo">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Aplicar Filtros</button>
                    <a href="{{ route('motos.index') }}" class="btn btn-secondary w-100 mt-2">Limpiar Filtros</a>
                </form>
            </div>

            <!-- Listado de motos -->
            <div class="motos-listing flex-fill">
                <div class="row">
                    @foreach ($motos as $moto)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="moto-contain">
                                    <img src="{{ asset($moto->imagen_url) }}" class="card-img-top" alt="{{ $moto->modelo }}">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $moto->modelo }}</h5>
                                    <p><strong>Precio:</strong> ${{ $moto->precio }}</p>
                                    <p><strong>Año:</strong> {{ $moto->año }}</p>
                                    <button class="btn btn-primary btn-ver-detalles" data-id="{{ $moto->id }}">Ver
                                        Detalles</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Popup -->
    <div class="popup-overlay"></div>
    <div class="popup-panel">
        <h5 id="popupTitle"></h5>
        <img id="popupImage" class="img-fluid mb-3" alt="Imagen de la moto">
        <p id="popupPrice"></p>
        <p id="popupYear"></p>
        <p id="popupDescription"></p>
        <div class="popup-actions mt-4">
            <button class="btn btn-primary me-2" id="btnCotizar">Cotizar</button>
            <button class="btn btn-secondary btn-close-panel">Cerrar</button>
        </div>
    </div>

    <!-- Call-to-Action Personalizado -->
    <div class="bg-light text-center p-4 mt-5">
        <h2 class="fw-bold">¿No encuentras la moto que buscas?</h2>
        <p class="text-muted">Contáctanos y te ayudaremos a encontrar la moto ideal para ti.</p>
        <a href="/contacto" class="btn btn-primary btn-lg"><i class="bi bi-telephone-fill"></i>Contáctanos</a>
    </div>
