<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotosYamaha.pe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Home/Home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Home/responsive.css') }}">
    <style>
        .carousel-inner {
            max-width: 100%;
            overflow: hidden;
        }
        .blog-list {
            display: flex;
            gap: 20px;
            justify-content: space-between;
}

        .carousel-caption{
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            text-shadow:2px 2px 4px rgba(0,0,0,0.7);
            background-color: rgba(0,0,0,0.5);
            padding: 20px;
            border-radius: 10px;
            width: 100%;
        }
        .caption-title {
            font-size: 2rem;
            font-weight: bold;
        }
        .caption-text {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        .slider-img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
        .carousel-item img {
            object-fit: cover;
            width: 100%;
            height: 500px;
        }
        .carousel-indicators button {
            background-color: #fff;
        }
        .tipoSection {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            grid-gap: 20px;
            padding: 20px;
            justify-items: center;
            grid-template-rows: repeat(2, auto);
        }
        .icon-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: transform 0.3s ease;
            width: 100%;
            height: 100%;
        }
        .icon-container:hover{
            transform: scale(1.1);
        }
        .icon-container img {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            object-fit: contain;
            object-position: center;
            background-color: #fff;
            border: 2px solid #ccc;
        }
        .icon-name {
            text-align: center;
            font-size: 18px;
            color: #333;
            font-weight: bold;
            text-transform: capitalize;
            margin-top: 8px;
        }
        #hero h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            text-transform: uppercase;
            margin-bottom: 20px;
            letter-spacing: 2px;
            text-shadow: 1px 1px 5px rgba( 0, 0, 0, 0.3);
        }
        .nav-icon {
            display: flex;
            background-color: #fff;
            color: #333;
            padding: 10px 20px;
            font-weight:bold;
            text-transform: uppercase;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .nav-icon:hover{
            background-color: #f0f0f0;
            color: #007bff;
        }
        .nav-icon:active {
            background-color: #e0e0e0;
            color: #0056b3;
        }
        .tipoSection > .icon-container:nth-child(1),
        .tipoSection > .icon-container:nth-child(2),
        .tipoSection > .icon-container:nth-child(3),
        .tipoSection > .icon-container:nth-child(4),
        .tipoSection > .icon-container:nth-child(5) {
            grid-column: span 1;

        }
        .tipoSection > .icon-container:nth-child(6),
        .tipoSection > .icon-container:nth-child(7),
        .tipoSection > .icon-container:nth-child(8),
        .tipoSection > .icon-container:nth-child(9) {
            grid-column: span 1;
        }
        .tipoSection > .icon-container:nth-child(10),
        .tipoSection > .icon-container:nth-child(11),
        .tipoSection > .icon-container:nth-child(12) {
            grid-column: span 1;
        }
        @media (max-width: 768px) {
            .tipoSection {
                grid-template-columns: repeat(3, 1fr);
            }

        }
        @media (max-width: 576px) {
            .tipoSection {
                grid-template-columns: repeat(2, 1fr);
            }
            .blog-card {
                box-sizing: border-box;
    }
        }
    </style>
</head>
{{-- Filtrador --}}

<body>
    <div class="fondo d-flex align-items-end">
        <div class="paralelogramo container content-center">
            <div class="container d-flex justify-content-center">
                <ul class="nav d-flex justify-content-center container-services">
                    <li class="nav-item mt-2">
                        <a class="nav-link text-white" href="{{ route('autos.nuevos') }}">
                            Comprar Nuevos
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link text-white" href="{{ route('servicios.index') }}#agenda">
                            Quiero Vender
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link text-white" href="{{ route('servicios.index') }}#financiamiento">
                            Quiero Financiar
                        </a>
                    </li>
                </ul>
            </div>
            <center>
                <hr style="width: 80%;" />
            </center>
            <div class="container d-flex justify-content-around mt-3" id="form__radio">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="tipoBusquedaRadio" id="tipoAutos" value="autos" checked />
        <label class="form-check-label text-white" for="tipoAutos">Autos</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="tipoBusquedaRadio" id="tipoMotos" value="motos" />
        <label class="form-check-label text-white" for="tipoMotos">Motos</label>
    </div>
</div>

<br />

<div class="form__search">
    <form method="GET" action="{{ route('autos.index') }}" id="f-search" class="bg-white p-3 rounded shadow">
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="marca" class="form-label text-black">Marca:</label>
                <select id="marca" name="marca" class="form-control">
                    <option value="">Seleccionar Marca</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="modelo" class="form-label text-black">Modelo:</label>
                <select id="modelo" name="modelo" class="form-control">
                    <option value="">Seleccionar Modelo</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="año" class="form-label text-black">Año:</label>
                <select id="año" name="año" class="form-control">
                    <option value="">Seleccionar Año</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="precio" class="form-label text-black">Precio:</label>
                <<select id="precio" name="precio" class="form-control">
                    <option value="">Seleccionar Precio</option>
                </select>
            </div>
            <div class="col-md-3 search-container">
                <input type="hidden" id="tipoBusqueda" name="tipo" value="autos">
                <button type="submit" class="btn btn-warning text-white w-100 h-100 fw-bold">Buscar</button>
            </div>
        </div>
    </form>
</div>
    </br>
</div>
    </div>
    {{-- BUSCADOR--}}
    <section id="hero">
        <div class="container text-center">
            <h2 class="bauto text-center m-3">Tu auto, Tu marca</h2>

            <div class="justify-content-center scrollable tipoSection">
                @foreach ($marcas as $marca)
                <div class="icon-container"> {{-- Contenedor para icono y texto --}}
                    <a href="{{ route('autos.filterByBrand', $marca->marca) }}" class="nav-icon">
                        <img loading="lazy" src="{{ asset("/icons/marca/{$marca->marca}.svg") }}" alt="{{ $marca->marca}}" />
                    </a>
                        <p class="icon-name">{{ ucfirst($marca->marca) }}</p> {{-- Clase para el icono --}}
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Slides -->
    <div class="px-3">
        <div class="custom-carousel container  mt-5 mb-5 p-0">
        <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicadores -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                </div>


            <!-- Contenido del Carrusel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img loading="lazy" src="{{ asset('images/bg-slider.webp') }}" class="d-block w-100 slider-img" alt="Slide 1">
                    <div class="carousel-caption text-center">
                        <h5>Promoción Especial</h5>
                        <p class="text-white">Financia tu auto usado con una TEA de 9.99%.</p>
                        <button class="btn btn-primary">Conocer más</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img loading="lazy" src="{{ asset('images/promocion.png') }}" class="d-block w-100 slider-img" alt="Slide 2">
                    <div class="carousel-caption text-center">
                        <h5>Compra y Ahorra</h5>
                        <p class="text-white">¡Pagas el 50% ahora y el resto en 1 año!</p>
                        <button class="btn btn-primary" onclick="location.href = '/autos'">Ver autos</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img loading="lazy" src="{{ asset('images/seguro.jpg') }}" class="d-block w-100 slider-img" alt="Slide 3">
                    <div class="carousel-caption text-center">
                        <h5>Seguro Vehicular</h5>
                        <p class="text-white">Protege tu vehículo con los mejores beneficios.</p>
                        <button class="btn btn-primary">Cotizar</button>
                    </div>
                </div>
            </div>
            <!-- Controles de Navegación -->
            <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#customCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    </div>
    </div>

    </div>
    {{-- Vistas Destacadas --}}
    <section class="section featured-car" id="featured-car">
        <div class="container">
            <div class="title-wrapper d-flex justify-content-between align-items-center">
                <h2 class="bauto">Avisos Destacados</h2>
                <div class="btn-group" role="group" aria-label="Selector de tipo">
                    <button type="button" class="btn btn-outline-primary active" id="btn-autos"
                        onclick="mostrarAutos()">Autos</button>
                    <button type="button" class="btn btn-outline-primary" id="btn-motos"
                        onclick="mostrarMotos()">Motos</button>
                </div>
            </div>

            <div id="destacados-autos" class="featured-car-list" style="display: block;">
                <ul class="items-destacados d-flex flex-wrap justify-content-start gap-3">
                    @foreach ($destacadosAutos as $auto)
                        <li class="featured-car-item">
                            <div class="featured-car-card">
                                <div class="label">Sale</div>
                                <figure class="card-banner img-container">
                                    <img loading="lazy" src="{{ asset($auto->imagen_url) }}"
                                        alt="{{ ucwords($auto->marca) }} {{ $auto->modelo }}" class="card-img" />
                                </figure>
                                <div class="card-content">
                                    <div class="card-title-wrapper">
                                        <h4 class="h5 card-title">
                                            <a href="#">{{ ucwords($auto->marca) }} {{ $auto->modelo }}</a>
                                        </h4>
                                        <data class="year">{{ $auto->año }}</data>
                                    </div>
                                    <ul class="card-list">
                                        <li class="card-list-item"><span
                                                class="card-item-text">{{ ucwords($auto->tipo) }}</span></li>
                                        <li class="card-list-item"><span
                                                class="card-item-text">{{ $auto->combustible }}</span></li>
                                        <li class="card-list-item"><span
                                                class="card-item-text">{{ $auto->transmision }}</span></li>
                                    </ul>
                                    <div class="card-price-wrapper">
                                        <p class="card-price">
                                            <strong>${{ number_format($auto->precio, 2) }}</strong>
                                        </p>
                                        <button class="btn fw-bold">Comprar Ahora</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div id="destacados-motos" class="featured-car-list" style="display: none;">
                <ul class="items-destacados d-flex flex-wrap justify-content-start gap-3">
                    @foreach ($destacadosMotos as $moto)
                        <li class="featured-car-item">
                            <div class="featured-car-card">
                                <div class="label">Sale</div>
                                <figure class="card-banner img-container">
                                    <img loading="lazy" src="{{ asset($moto->imagen_url) }}"
                                        alt="{{ $moto->marca }} {{ $moto->modelo }}" class="card-img" />
                                </figure>
                                <div class="card-content">
                                    <div class="card-title-wrapper">
                                        <h4 class="h5 card-title">
                                            <a href="#">{{ $moto->marca }} {{ $moto->modelo }}</a>
                                        </h4>
                                        <data class="year">{{ $moto->año }}</data>
                                    </div>
                                    <ul class="card-list">
                                        <li class="card-list-item"><span
                                                class="card-item-text">{{ ucwords($moto->combustible) }}</span></li>
                                        <li class="card-list-item"><span
                                                class="card-item-text">{{ $moto->rendimiento }}</span></li>
                                        <li class="card-list-item"><span
                                                class="card-item-text">{{ $moto->transmision }}</span></li>
                                    </ul>
                                    <div class="card-price-wrapper">
                                        <p class="card-price">
                                            <strong>${{ number_format($moto->precio, 2) }}</strong>
                                        </p>
                                        <a href="/contacto" class="btn fw-bold">Comprar Ahora</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>


    {{-- Ultimas Noticias --}}
    <section class="section blog" id="blog">
        <div class="container">
            <div class="container d-flex justify-content-between pb-4">
                <h2 class="bauto">Últimas Noticias</h2>
                <a href="/noticias"
                    style="text-decoration: none; display:flex; flex-wrap: wrap; align-content: center" type="button"
                    class="btn-pagina">
                    Ver más Noticias
                </a>
            </div>
            <ul class="blog-list has-scrollbar">
                <li>
                    <div class="blog-card">
                        <figure class="card-banner">
                            <a href="#">
                                <img loading="lazy" src="{{ asset('images/Noticia/reduce.webp') }}"
                                    alt="Opening of new offices of the company" loading="lazy" class="w-100" />
                            </a>
                        </figure>
                        <div class="card-content">
                            <p class="card-description">Abril 5, 2023 Semana Santa 2023: 5 destinos ideales para
                                visitar el
                                próximo fin de semana largo</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="blog-card">
                        <figure class="card-banner">
                            <a href="#">
                                <img loading="lazy" src="{{ asset('images/Noticia/derrapar.webp') }}"
                                    alt="What cars are most vulnerable" loading="lazy" class="w-100" />
                            </a>
                        </figure>
                        <div class="card-content">
                            <p class="card-description">Marzo 31, 2023 Drifting: Caracteristica de un auto para
                                derrapar.
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="blog-card">
                        <figure class="card-banner">
                            <a href="#">
                                <img loading="lazy" src="{{ asset('images/Noticia/destinos.webp') }}"
                                    alt="Statistics showed which average age" loading="lazy" class="w-100" />
                            </a>
                        </figure>
                        <div class="card-content">
                            <p class="card-description">Descripcion para el Blog 3</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="blog-card">
                        <figure class="card-banner">
                            <a href="#">
                                <img loading="lazy" src="{{ asset('images/Noticia/destinos.webp') }}"
                                    alt="Statistics showed which average age" loading="lazy" class="w-100" />
                            </a>
                        </figure>
                        <div class="card-content">
                            <p class="card-description">Descripcion para el Blog 3</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <script>
        const getMarcas = async (select_type) => {
             await fetch(`/getMarcasYModelos?tipo=${select_type}`)
             .then(response => response.json())
             .then(data => {

                    {{--console.log("Datos de Marcas recibidos:", data);--}}

                 const marcaSelect = document.getElementById('marca');
                 const modeloSelect = document.getElementById('modelo');
                 if (data.marcas.length === 0) {
                    marcaSelect.innerHTML += '<option value="" disabled>No hay marcas disponibles</option>';
                } else {
                    data.marcas.forEach(marca => {
                        let option = document.createElement('option');
                        option.value = marca;
                        option.textContent = marca.charAt(0).toUpperCase() + marca.slice(1);
                        marcaSelect.appendChild(option);
                    });
                }
                modeloSelect.innerHTML = '<option value="">Seleccionar Modelo</option>';
            })
            .catch(error => console.error('Error:', error));
        }

        getMarcas('autos');

    document.querySelectorAll('input[name="tipoBusquedaRadio"]').forEach(radio => {

         radio.addEventListener('change', async function() {
             const tipoSeleccionado = this.value;

             document.getElementById('tipoBusqueda').value = tipoSeleccionado;

             console.log(`Tipo seleccionado: ${tipoSeleccionado}`);

             document.getElementById('marca').innerHTML = '<option value="">Seleccionar Marca</option>';
             document.getElementById('modelo').innerHTML = '<option value="">Seleccionar Modelo</option>';

             await getMarcas(tipoSeleccionado);

            });
        });
    document.getElementById('marca').addEventListener('change', function() {
    const marcaSeleccionada = this.value;
    const tipoSeleccionado = document.getElementById('tipoBusqueda').value;
    const modeloSelect = document.getElementById('modelo');
    const añoSelect = document.getElementById('año');
    const precioSelect = document.getElementById('precio');

    modeloSelect.innerHTML = '<option value="">Seleccionar Modelo</option>';
    añoSelect.innerHTML = '<option value="">Seleccionar Año</option>';
    precioSelect.innerHTML = '<option value="">Seleccionar Precio</option>';

    if (marcaSeleccionada) {
        fetch(`http://127.0.0.1:8000/getModelos?tipo=${tipoSeleccionado}&marca=${marcaSeleccionada}`)
            .then(response => response.json())
            .then(data => {

                console.log("Datos de Modelos recibidos:", data);

                data.modelos.forEach(modelo => {
                    let option = document.createElement('option');
                    option.value = modelo;
                    option.textContent = modelo.charAt(0).toUpperCase() + modelo.slice(1);
                    modeloSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error:', error));

            fetch(`/getAñosYPrecios?tipo=${tipoSeleccionado}&marca=${marcaSeleccionada}`)
            .then(response => response.json())
            .then(data => {
                console.log("Años y Precios recibidos:", data);

                data.años.forEach(año => {
                    let option = document.createElement('option');
                    option.value = año;
                    option.textContent = año;
                    añoSelect.appendChild(option);
                });

                data.precios.forEach(precio => {
                    let option = document.createElement('option');
                    option.value = precio;
                    option.textContent = `S/ ${precio}`;
                    precioSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error al obtener años y precios:', error));
        }
    });
    document.getElementById('modelo').addEventListener('change', function() {
    const añoInput = document.getElementById('año');
    const precioInput = document.getElementById('precio');
        if (this.value) {
            añoInput.removeAttribute('disabled');
            precioInput.removeAttribute('disabled');
        } else {
            añoInput.setAttribute('disabled', true);
            precioInput.setAttribute('disabled', true);
        }
    });
    document.getElementById('marca').addEventListener('change', function() {
        document.getElementById('modelo').innerHTML = '<option value="">Seleccionar Modelo</option>';
        document.getElementById('año').setAttribute('disabled', true);
        document.getElementById('precio').setAttribute('disabled', true);
    });
</script>
    <script>
        function handleTipoClick() {
            document.getElementById("tipoSection").style.display = "flex";
            document.getElementById("marcaSection").style.display = "none";
        }

        function handleMarcaClick() {
            document.getElementById("tipoSection").style.display = "none";
            document.getElementById("marcaSection").style.display = "flex";
        }

        function mostrarAutos() {
            document.getElementById('destacados-autos').style.display = 'block';
            document.getElementById('destacados-motos').style.display = 'none';
            document.getElementById('btn-autos').classList.add('active');
            document.getElementById('btn-motos').classList.remove('active');
        }

        function mostrarMotos() {
            document.getElementById('destacados-autos').style.display = 'none';
            document.getElementById('destacados-motos').style.display = 'block';
            document.getElementById('btn-motos').classList.add('active');
            document.getElementById('btn-autos').classList.remove('active');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
