<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Autos y Motos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Servicios/Servicios.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Servicios/responsive.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: contain;
            background-color: #f8f9fa;
        }
        @keyframes fadeIn{
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .accordion-collapse{
            transition: max-height 0.5s ease-in-out;
        }
        .accordion-button{
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .accordion-button:hover {
            color: #fff;
            background-color:rgb(207, 111, 111);
        }
        .review-card{
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <!-- Sección de Servicios -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Nuestros Servicios</h2>
            <p class="text-center mb-5">
                En <strong>Autos y Motos</strong>, ofrecemos soluciones completas para la compra y venta de vehículos.
                Con años de experiencia, brindamos calidad, confianza y un servicio excepcional.
            </p>
            <div class="row">
                <!-- Servicio 1 -->
                <a class="col-md-4 text-decoration-none" href="{{ route('autos.nuevos') }}">
                    <div class="card h-100">
                        <img src="https://autoland.com.pe/wp-content/uploads/2022/04/MgZxPlus_Interna_miniatura.png"
                            class="card-img-top" alt="Venta de Autos Nuevos">
                            <div class="card-body">
                                <h5 class="card-title">Venta de Autos Nuevos</h5>
                                <p class="card-text">Encuentra los últimos modelos de autos de tus marcas favoritas con
                                garantía y financiamiento.</p>
                            </div>
                    </div>
                </a>
                <!-- Servicio 2 -->
                <a class="col-md-4 text-decoration-none" href="{{ route('autos.usados') }}">
                    <div class="card h-100">
                        <img src="https://acroadtrip.blob.core.windows.net/publicaciones-imagenes/Small/ssangyong/korando/pe/RT_PU_32217e9617f946de961266c1f2b3132f.webp"
                            class="card-img-top" alt="Venta de Autos Usados">
                            <div class="card-body">
                                <h5 class="card-title">Autos Usados</h5>
                                <p class="card-text">Compra vehículos certificados y en excelentes condiciones a precios
                                accesibles.</p>
                            </div>
                    </div>
                </a>
                <!-- Servicio 3 -->
                <a class="col-md-4 text-decoration-none" href="{{ route('motos.index') }}">
                    <div class="card h-100">
                        <img src="https://flux.somosmoto.pe/r/https://somosmoto.pe/images/models/thumbnails/colors/rtm-70-prox-2021-azul-fdd928.png?width=922"
                            class="card-img-top" alt="Venta de Motos">
                        <div class="card-body">
                            <h5 class="card-title">Venta de Motos</h5>
                            <p class="card-text">Explora nuestra amplia selección de motocicletas nuevas y usadas para
                                cada estilo de vida.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
        <!-- Sección Acerca de la Empresa -->
        <section class="py-5 acerca-empresa" style="background-image: url('{{ $imageUrl }}'); background-size: cover; background-position: center; background-attachment: fixed; color: white;">
    <div class="container" style="background-color: rgba(0,0,0,0.5); padding: 30px;">
        <h2 class="text-center mb-4" style="font-size: 2.5rem; font-family: 'Poppins', sans-serif; color: #FFD700; text-shadow: 2px 2px 5px rgba(0,0,0,0.7); animation: fadeIn 2s ease-out;">¿Quiénes Somos?</h2>
        <p class="text-center mb-5" style="font-size: 1.2rem; font-family: 'Poppins', sans-serif; font-weight: 500; color: #FFF; text-shadow: 1px 1px 3px rgba(0,0,0,0.6);">
                En <strong>Autos y Motos</strong>, nos dedicamos a proporcionar soluciones de movilidad con un enfoque
                en calidad y confianza. Nuestro equipo de expertos trabaja incansablemente para asegurarse de que cada
                cliente encuentre el vehículo que mejor se adapte a sus necesidades y estilo de vida.
                Nos esforzamos por mantener relaciones duraderas con nuestros clientes basadas en la transparencia y el
                compromiso.
    </p>
    </div>
</section>
    <section class="py-5">
    <h2 class="text-center mb-3">📅 Reserva tu Prueba de Manejo</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form id="pruebaManejoForm" class="needs-validation" novalidate>
                            <!-- Fecha y Hora -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">
                                        <i class="fas fa-calendar"></i> Fecha
                                    </label>
                                    <input type="date" class="form-control" id="fechaPrueba" required>
                                    <div class="invalid-feedback">
                                        Por favor selecciona una fecha válida
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">
                                        <i class="fas fa-clock"></i> Hora
                                    </label>
                                    <select class="form-select" id="horaPrueba" required>
                                        <option value="">Selecciona una hora</option>
                                        <option value="09:00">09:00</option>
                                        <option value="10:00">10:00</option>
                                        <option value="11:00">11:00</option>
                                        <option value="12:00">12:00</option>
                                        <option value="14:00">14:00</option>
                                        <option value="15:00">15:00</option>
                                        <option value="16:00">16:00</option>
                                        <option value="17:00">17:00</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Por favor selecciona una hora
                                    </div>
                                </div>
                            </div>
                            <!-- Vehículo -->
                            <div class="mb-3">
                                <label class="form-label">
                                    <i class="fas fa-car-side"></i> Vehículo
                                </label>
                                <select class="form-select" id="vehiculoPrueba" required>
                                    <option value="">Selecciona un vehículo</option>
                                    <optgroup label="Autos">
                                        <option value="Toyota Corolla 2024">Toyota Corolla 2024</option>
                                        <option value="Honda Civic 2024">Honda Civic 2024</option>
                                        <option value="BMW X3 2024">BMW X3 2024</option>
                                    </optgroup>
                                    <optgroup label="Motos">
                                        <option value="Honda CBR500R">Honda CBR500R</option>
                                        <option value="Kawasaki Ninja 400">Kawasaki Ninja 400</option>
                                        <option value="Yamaha MT-07">Yamaha MT-07</option>
                                    </optgroup>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor selecciona un vehículo
                                </div>
                            </div>

                            <!-- Información de contacto -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">
                                        <i class="fas fa-user"></i> Nombre completo
                                    </label>
                                    <input type="text" class="form-control" id="nombrePrueba" required>
                                    <div class="invalid-feedback">
                                        Por favor ingresa tu nombre
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">
                                        <i class="fas fa-phone"></i> Teléfono
                                    </label>
                                    <input type="tel" class="form-control" id="telefonoPrueba" required>
                                    <div class="invalid-feedback">
                                        Por favor ingresa un teléfono válido
                                    </div>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label">
                                    <i class="fas fa-envelope"></i> Email
                                </label>
                                <input type="email" class="form-control" id="emailPrueba" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa un email válido
                                </div>
                            </div>

                            <!-- Sucursal -->
                            <div class="mb-3">
                                <label class="form-label">
                                    <i class="fas fa-map-marker-alt"></i> Ubicación
                                </label>
                                <input type="text" class="form-control" id="ubicacionPrueba" readonly required>
                                <button type="button" class="btn btn-outline-primary mt-2" onclick="mostrarSelectorSucursal()">
                                    <i class="fas fa-store"></i> Seleccionar Sucursal
                                </button>
                                <div class="invalid-feedback">
                                    Por favor selecciona una sucursal
                                </div>
                            </div>

                            <!-- Comentarios -->
                            <div class="mb-3">
                                <label class="form-label">
                                    <i class="fas fa-comment"></i> Comentarios adicionales
                                </label>
                                <textarea class="form-control" id="comentariosPrueba" rows="3"
                                    placeholder="¿Tienes alguna pregunta o requerimiento especial?"></textarea>
                            </div>

                            <div class="d-grid gap-2">
                                <button class="btn btn-primary btn-lg" type="submit">
                                    <i class="fas fa-check-circle"></i> Confirmar Reserva
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Toast de confirmación -->
                <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                    <div id="confirmacionToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header bg-success text-white">
                            <i class="fas fa-check-circle me-2"></i>
                            <strong class="me-auto">Reserva Confirmada</strong>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            ¡Tu reserva ha sido confirmada! Te hemos enviado un email con los detalles.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Modal para mostrar detalles -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="infoModalBody"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function mostrarModal(titulo, mensaje) {
            document.getElementById('infoModalLabel').innerText = titulo;
            document.getElementById('infoModalBody').innerText = mensaje;
            var modal = new bootstrap.Modal(document.getElementById('infoModal'));
            modal.show();
        }
    </script>

    <!-- Sección de Ofertas y Descuentos Original -->
    <section class="py-5 bg-light text-center">
        <!-- Tu código original se mantiene exactamente igual -->
        <div class="container">
            <h2 class="section-title">🎉 Ofertas y Descuentos Especiales</h2>
            <p class="lead">Aprovecha nuestras promociones exclusivas por tiempo limitado.</p>
            <div id="countdown" class="fs-4 text-danger fw-bold"></div>
            <p class="mt-3">
                <button class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#ofertasModal">Ver
                    Ofertas</button>
                <!-- Nuevo botón de notificaciones -->
                <button id="btnNotificaciones" class="btn btn-warning btn-lg">
    <i class="fas fa-bell"></i> Activar Notificaciones
</button>
            </p>
        </div>
    </section>
    <!-- Nueva sección de características avanzadas -->
    <div class="container mt-5">
            <div class="row g-4">
                <!-- Configurador 3D -->
                <div class="col-md-6">
        <div class="card h-100">
            <div class="card-body">
                <h4 class="card-title">
                    <i class="fas fa-car"></i> Configurador Virtual
                </h4>
                <p class="card-text">Personaliza y visualiza tu vehículo desde diferentes ángulos</p>

                <div class="configurator-controls">
                    <h5 class="mb-3">Color del Vehículo</h5>
                    <div class="color-options">
                        <div class="color-option active" style="background-color: #FF0000;" onclick="cambiarColor('rojo')"></div>
                        <div class="color-option" style="background-color: #0000FF;" onclick="cambiarColor('azul')"></div>
                        <div class="color-option" style="background-color: #000000;" onclick="cambiarColor('negro')"></div>
                        <div class="color-option" style="background-color: #FFFFFF;" onclick="cambiarColor('blanco')"></div>
                        <div class="color-option" style="background-color: #808080;" onclick="cambiarColor('plata')"></div>
                    </div>
                </div>

                <div class="car-configurator">
                    <div class="car-image-container" id="carContainer">
                        <img class='car-image' src="https://tmna.aemassets.toyota.com/is/image/toyota/toyota/jellies/max/2024/mirai/limited/3003/3u5/36/1.png?fmt=webp-alpha&wid=930&qlt=90" alt="">
                        <!-- Las imágenes se cargarán dinámicamente -->
                    </div>
                    <div class="angle-buttons">
                        <button class="angle-button active" onclick="cambiarAngulo('frente')">
                            <i class="fas fa-car-front"></i>
                        </button>
                        <button class="angle-button" onclick="cambiarAngulo('lado')">
                            <i class="fas fa-car-side"></i>
                        </button>
                        <button class="angle-button" onclick="cambiarAngulo('trasera')">
                            <i class="fas fa-car-rear"></i>
                        </button>
                        <button class="angle-button" onclick="cambiarAngulo('interior')">
                            <i class="fas fa-car"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


                <!-- Calculadora de Financiamiento -->
                <div id="financiamiento" class="col-md-6">
                    <div class="card h-100 justify-content-center">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fas fa-calculator"></i> Calculadora de Financiamiento
                            </h4>
                            <div class="calculator-widget">
                                <div class="d-flex gap-3 mb-3">
                                    <label class="">Precio del Vehículo</label>
                                    <input type="range" class="custom-range" id="precioRange" min="10000" max="100000" step="1000">
                                    <output id="precioOutput">50000</output>
                                </div>
                                <div class="d-flex gap-3 mb-3">
                                    <label class="">Cuota Inicial (%)</label>
                                    <input type="range" class="custom-range" id="cuotaRange" min="10" max="50" step="5">
                                    <output id="cuotaOutput">20</output>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Plazo (meses)</label>
                                    <select class="form-select" id="plazoSelect">
                                        <option value="24">24 meses</option>
                                        <option value="36">36 meses</option>
                                        <option value="48">48 meses</option>
                                        <option value="60">60 meses</option>
                                    </select>
                                </div>
                                <div class="alert alert-info mb-0">
                                    <strong>Cuota mensual estimada:</strong>
                                    <span id="cuotaMensual">$XXX</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comparador de Modelos -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fas fa-exchange-alt"></i> Comparador de Modelos
                            </h4>
                            <div class="compare-container">
                                <div class="compare-item">
                                    <select class="form-select mb-3" id="modelo1">
                                        <option>Seleccionar Modelo 1</option>
                                        <option>Toyota Corolla 2024</option>
                                        <option>Honda Civic 2024</option>
                                        <option>Nissan Sentra 2024</option>
                                    </select>
                                    <div class="specs-table" id="specs1">
                                        <!-- Se llena dinámicamente -->
                                    </div>
                                </div>
                                <div class="compare-item">
                                    <select class="form-select mb-3" id="modelo2">
                                        <option>Seleccionar Modelo 2</option>
                                        <option>Toyota Corolla 2024</option>
                                        <option>Honda Civic 2024</option>
                                        <option>Nissan Sentra 2024</option>
                                    </select>
                                    <div class="specs-table" id="specs2">
                                        <!-- Se llena dinámicamente -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               <!-- Agenda Virtual Mejorada con Notificaciones y Calendario Interactivo -->
<div id="agenda" class="col-md-12">
    <div class="card h-100">
        <div class="card-body">
            <h4 class="card-title">
                <i class="fas fa-calendar-alt"></i> Agenda Virtual
            </h4>
            <p class="card-text">Agenda tu mantenimiento o servicio en línea</p>

            <div class="mb-3">
                <label class="form-label">Tipo de Servicio</label>
                <select class="form-select" id="tipoServicio">
                    <option value="Mantenimiento Preventivo">Mantenimiento Preventivo</option>
                    <option value="Cambio de Aceite">Cambio de Aceite</option>
                    <option value="Revisión de Frenos">Revisión de Frenos</option>
                    <option value="Alineación y Balanceo">Alineación y Balanceo</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha y Hora</label>
                <input type="datetime-local" class="form-control" id="fechaHora">
            </div>

            <div class="mb-3">
                <label class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo">
            </div>

            <button class="btn btn-primary" onclick="agendarCita()">Agendar Cita</button>
            <div id="confirmacion" class="mt-3 text-success" style="display:none;"></div>
        </div>
    </div>
</div>
<!-- Calendario Interactivo -->
<div id="calendario"></div>


                <!-- Estado del Servicio -->
<div class="col-md-12">
    <div class="card h-100">
        <div class="card-body">
            <h4 class="card-title">
                <i class="fas fa-tasks"></i> Seguimiento de Servicio
            </h4>
            <p class="card-text">Consulta el estado de tu servicio en tiempo real</p>

            <!-- Formulario de búsqueda -->
            <form id="formSeguimiento" class="mb-3">
                <div class="input-group">
                    <input type="text"
                           id="numeroOrden"
                           class="form-control"
                           placeholder="Ejemplo: OS-2024-001"
                           pattern="OS-\d{4}-\d{3}"
                           required>
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search"></i> Buscar
                    </button>
                </div>
                <div class="form-text">
                    El número de orden se encuentra en tu comprobante de servicio (Formato: OS-2024-001)
                </div>
            </form>

            <!-- Contenedor de resultados -->
            <div id="resultadoSeguimiento" style="display: none;">
                <div class="progress mb-3">
                    <div id="progressBar"
                         class="progress-bar progress-bar-striped progress-bar-animated"
                         role="progressbar"
                         style="width: 0%">
                    </div>
                </div>

                <div class="timeline">
                    <div class="timeline-item" id="step1">
                        <i class="fas fa-circle text-secondary"></i>
                        <span>Recepción del vehículo</span>
                    </div>
                    <div class="timeline-item" id="step2">
                        <i class="fas fa-circle text-secondary"></i>
                        <span>Diagnóstico</span>
                    </div>
                    <div class="timeline-item" id="step3">
                        <i class="fas fa-circle text-secondary"></i>
                        <span>En proceso</span>
                    </div>
                    <div class="timeline-item" id="step4">
                        <i class="fas fa-circle text-secondary"></i>
                        <span>Control de calidad</span>
                    </div>
                    <div class="timeline-item" id="step5">
                        <i class="fas fa-circle text-secondary"></i>
                        <span>Listo para entrega</span>
                    </div>
                </div>

                <!-- Detalles del servicio -->
                <div id="detallesServicio" class="mt-3">
                    <h5>Detalles del Servicio</h5>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Vehículo:</strong> <span id="vehiculoInfo">-</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Fecha de ingreso:</strong> <span id="fechaInfo">-</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Tipo de servicio:</strong> <span id="tipoServicioInfo">-</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Estado actual:</strong> <span id="estadoInfo">-</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Mensaje de error -->
            <div id="errorMensaje" class="alert alert-danger" style="display: none;">
                Número de orden no encontrado. Por favor, verifica e intenta nuevamente.
            </div>
        </div>
    </div>
</div>

    </section>

    <!-- Sección Opiniones -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Opiniones de Nuestros Clientes</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="/images/JuanP.jpg" alt="Juan Peréz" class="rounded-circle mb-3" width="100">
                            <h5 class="card-title">Juan Pérez</h5>
                            <p class="card-text">"Excelente servicio, todo fue muy rápido y seguro. Estoy muy
                                satisfecho con mi compra."</p>
                            <p class="text-warning">★★★★★</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                        <img src="/images/mariaR.jpg" alt="María Rodríguez" class="rounded-circle mb-3" width="100">
                            <h5 class="card-title">María Rodríguez</h5>
                            <p class="card-text">"Un trato profesional y amable. Definitivamente recomendaría esta
                                empresa."</p>
                            <p class="text-warning">★★★★☆</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                        <img src="/images/CarlosP.jpg" alt="Carlos Gómez" class="rounded-circle mb-3" width="100">
                            <h5 class="card-title">Carlos Gómez</h5>
                            <p class="card-text">"Buena experiencia de compra, aunque el proceso de entrega podría
                                mejorar."</p>
                            <p class="text-warning">★★★☆☆</p>
                        </div>
                    </div>
                </div>
    <!-- Sección Preguntas Frecuentes -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Preguntas Frecuentes</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            ¿Qué tipo de garantía ofrecen?
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Ofrecemos una garantía de hasta 12 meses en todos los vehículos nuevos y usados
                            certificados.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                       data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            ¿Puedo financiar mi compra?
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Sí, contamos con opciones de financiamiento flexibles para adaptarnos a tus necesidades.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            ¿Hacen envíos a otras ciudades?
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Sí, ofrecemos servicios de transporte de vehículos a nivel nacional.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            ¿Aceptan vehículos como parte de pago?
                        </button>
                    </h2>
                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Sí, evaluamos tu vehículo actual como parte del pago para tu nuevo auto o moto.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            ¿Cómo puedo agendar una cita?
                        </button>
                    </h2>
                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Puedes agendar una cita llamándonos al +123 456 7890 o completando nuestro formulario de
                            contacto en línea.

    </section>
    <!-- Modal de Ofertas con botón de compartir -->
<!-- Modal de Ofertas -->
<div class="modal fade" id="ofertasModal" tabindex="-1" aria-labelledby="ofertasModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ofertasModalLabel">🎉 Ofertas Especiales</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </section>
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
                confirmationModal.show();
            });
        </script>
    @endif
</div>

<!-- Modal de Compartir -->
<div class="modal fade" id="compartirModal" tabindex="-1" aria-labelledby="compartirModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="compartirModalLabel">Compartir Ofertas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p>Comparte esta oferta en:</p>
                <button class="btn btn-success mb-2" onclick="compartirRedSocial('whatsapp')">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </button>
                <button class="btn btn-primary mb-2" onclick="compartirRedSocial('facebook')">
                    <i class="fab fa-facebook"></i> Facebook
                </button>
                <button class="btn btn-info" onclick="compartirRedSocial('twitter')">
                    <i class="fab fa-twitter"></i> Twitter
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function compartirRedSocial(red) {
        const url = encodeURIComponent(window.location.href);
        const text = encodeURIComponent("🔥 ¡Aprovecha estas ofertas increíbles en Autos y Motos! 🚗🏍️");
        let shareUrl = "";

        switch (red) {
            case "whatsapp":
                shareUrl = `https://wa.me/?text=${text}%20${url}`;
                break;
            case "facebook":
                shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
                break;
            case "twitter":
                shareUrl = `https://twitter.com/intent/tweet?text=${text}&url=${url}`;
                break;
        }

        window.open(shareUrl, "_blank");
    }
</script>



   <!-- Botón flotante de WhatsApp -->
<a href="https://wa.me/1234567890?text=¡Hola!%20Quisiera%20más%20información%20sobre%20sus%20productos."
   class="whatsapp-float" target="_blank">
    <i class="bi bi-whatsapp"></i>
</a>

<!-- Estilos para el botón flotante -->
<style>
    .whatsapp-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #25D366;
        color: white;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        text-decoration: none;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease-in-out;
    }

    .whatsapp-float:hover {
        transform: scale(1.1);
    }

    .whatsapp-icon {
        color: white;
    }
</style>



<script>

document.addEventListener("DOMContentLoaded", function () {
    const btn = document.querySelector("#btnNotificaciones");

    if (!btn) {
        console.error("No se encontró el botón de notificaciones.");
        return;
    }

    // Verificar si la variable en localStorage 'notifications'
    // contiene el valor de true
    if (localStorage.getItem('notifications') == 'true') {
        const btn = document.querySelector("#btnNotificaciones");
        btn.innerHTML = '<i class="fas fa-bell"></i> Notificaciones Activadas';
        btn.classList.remove('btn-warning');
        btn.classList.add('btn-success');
    }

    // Verificar si previamente las notificaciones
    //  fueron permitidas
    if (Notification.permission === "granted") {
        localStorage.setItem('notifications', true);
    } else {
        localStorage.setItem('notifications', false);
    }

    function showNotification() {

        const title = "🔔 Notificaciones activadas";
        const body = "¡Recibirás actualizaciones sobre nuestras ofertas!";
        let isActive = false;

        if (!("Notification" in window)) {
            alert("Tu navegador no soporta notificaciones.");
            return Promise.resolve(false);
        }

        if (Notification.permission === "granted") {
            new Notification(title, { body });
            localStorage.setItem('notifications', true);
            return Promise.resolve(true);
        } else {
            localStorage.setItem('notifications', false);
            return new Promise((resolve) => {
                Notification.requestPermission().then(permission => {
                if (permission === "granted") {
                    localStorage.setItem('notifications', true);
                    new Notification(title, { body });
                    resolve(true); // Resolver la promesa como 'true' si se concede el permiso
                } else {
                    localStorage.setItem('notifications', false);
                    alert("No permitiste las notificaciones.");
                    resolve(false); // Resolver la promesa como 'false' si se niega el permiso
                }
                });
            });
        }
    }

    btn.addEventListener("click", async function () {

        const notStatus = await showNotification();

        if (notStatus) {
            this.innerHTML = '<i class="fas fa-bell"></i> Notificaciones Activadas';
            this.classList.remove('btn-warning');
            this.classList.add('btn-success');
        }
    });
});
</script>
<section class="py-5">
        <h2 class="text-center">📢 Opiniones de Clientes</h2>
        <div class="container">
            <div class="review-card">
                <p><strong>Juan Pérez</strong> ⭐⭐⭐⭐⭐</p>
                <p>"Excelente servicio y motos de calidad. Recomiendo 100%."</p>
            </div>
            <div class="review-card">
                <p><strong>María Gómez</strong> ⭐⭐⭐⭐⭐</p>
                <p>"Muy buena atención y variedad de modelos. Volveré a comprar aquí."</p>
            </div>
            <div class="review-card">
                <p><strong>Carlos Ramírez</strong> ⭐⭐⭐⭐☆</p>
                <p>"La experiencia fue buena, aunque el proceso de pago podría mejorar."</p>
            </div>
            <div class="review-card">
                <p><strong>Ana Fernández</strong> ⭐⭐⭐⭐⭐</p>
                <p>"Muy satisfecha con la compra. La entrega fue rápida y sin problemas."</p>
            </div>
            <div class="review-card">
                <p><strong>Pedro López</strong> ⭐⭐⭐⭐☆</p>
                <p>"Las motos son de excelente calidad, aunque la atención al cliente podría mejorar."</p>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("fechaPrueba").setAttribute("min", new Date().toISOString().split("T")[0]);

        // Validación del formulario
document.getElementById("pruebaManejoForm").addEventListener("submit", function(event) {
    const fechaSeleccionada = new Date(document.getElementById("fechaPrueba").value);
    const fechaActual = new Date();
    fechaActual.setHours(0, 0, 0, 0);
    const ubicacionSeleccionada = document.getElementById("ubicacionPrueba").value;

    if (fechaSeleccionada < fechaActual) {
        document.getElementById("mensajeError").style.display = "block";
        event.preventDefault();
        return;
    }

    if (!ubicacionSeleccionada) {
        alert("⚠️ Debes ingresar una ubicación para la prueba de manejo");
        event.preventDefault();
        return;
    }

    // Si todo está correcto
    document.getElementById("mensajeError").style.display = "none";
    alert(`✅ Prueba de manejo reservada con éxito para la ubicación: ${ubicacionSeleccionada}`);
});

    </script>

<script>



function extraerCoordenadas(url) {
    const regex = /@(-?\d+\.\d+),(-?\d+\.\d+)/;
    const match = url.match(regex);
    return match ? `Lat: ${match[1]}, Lng: ${match[2]}` : null;
}

const sucursales = [
    {
        id: 1,
        nombre: "Tienda Principal - Miraflores",
        direccion: "Av. José Pardo 456, Miraflores",
        coordenadas: {lat: -12.119815, lng: -77.030577},
        horario: "Lun-Sáb: 9:00 AM - 7:00 PM",
        telefono: "(01) 445-8899"
    },
    {
        id: 2,
        nombre: "Sucursal San Borja",
        direccion: "Av. Aviación 2501, San Borja",
        coordenadas: {lat: -12.108619, lng: -77.005394},
        horario: "Lun-Sáb: 9:00 AM - 8:00 PM",
        telefono: "(01) 475-6633"
    },
    {
        id: 3,
        nombre: "Sucursal Los Olivos",
        direccion: "Av. Carlos Izaguirre 988, Los Olivos",
        coordenadas: {lat: -11.991789, lng: -77.071232},
        horario: "Lun-Sáb: 9:00 AM - 7:00 PM",
        telefono: "(01) 528-7744"
    },
    {
        id: 4,
        nombre: "Sucursal San Juan de Lurigancho",
        direccion: "Av. Próceres de la Independencia 1632, SJL",
        coordenadas: {lat: -12.024595, lng: -77.009061},
        horario: "Lun-Sáb: 9:00 AM - 7:00 PM",
        telefono: "(01) 459-2233"
    },
    {
        id: 5,
        nombre: "Sucursal Surco",
        direccion: "Av. Benavides 5245, Santiago de Surco",
        coordenadas: {lat: -12.137995, lng: -76.981893},
        horario: "Lun-Sáb: 9:00 AM - 8:00 PM",
        telefono: "(01) 448-9922"
    }
];

function mostrarSelectorSucursal() {
    const contenidoModal = generarContenidoModal();

    // Actualizar el contenido del modal
    document.getElementById('infoModalLabel').innerText = 'Seleccionar Sucursal';
    document.getElementById('infoModalBody').innerHTML = contenidoModal;

    // Mostrar el modal
    const modal = new bootstrap.Modal(document.getElementById('infoModal'));
    modal.show();
}

// Función para generar el contenido del modal
function generarContenidoModal() {
    let contenido = `
        <div class="list-group">
    `;

    sucursales.forEach(sucursal => {
        contenido += `
            <button type="button"
                    class="list-group-item list-group-item-action"
                    onclick="seleccionarSucursal(${sucursal.id})">
                <h5 class="mb-1">${sucursal.nombre}</h5>
                <p class="mb-1">${sucursal.direccion}</p>
                <small class="text-muted">
                    ${sucursal.horario}<br>
                    Tel: ${sucursal.telefono}
                </small>
            </button>
        `;
    });

    contenido += `</div>`;
    return contenido;
}
// Función para seleccionar una sucursal
function seleccionarSucursal(id) {
    const sucursal = sucursales.find(s => s.id === id);
    if (sucursal) {
        document.getElementById('ubicacionPrueba').value =
            `${sucursal.nombre} - ${sucursal.direccion}`;

        // Cerrar el modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('infoModal'));
        modal.hide();
    }
}

document.getElementById('pruebaManejoForm').addEventListener('submit', function(event) {
    event.preventDefault();

    if (!this.checkValidity()) {
        event.stopPropagation();
        this.classList.add('was-validated');
        return;
    }

    // Recopilar datos del formulario
    const formData = {
        fecha: document.getElementById('fechaPrueba').value,
        hora: document.getElementById('horaPrueba').value,
        vehiculo: document.getElementById('vehiculoPrueba').value,
        nombre: document.getElementById('nombrePrueba').value,
        telefono: document.getElementById('telefonoPrueba').value,
        email: document.getElementById('emailPrueba').value,
        ubicacion: document.getElementById('ubicacionPrueba').value,
        comentarios: document.getElementById('comentariosPrueba').value
    };

    // Mostrar toast de confirmación
    const toast = new bootstrap.Toast(document.getElementById('confirmacionToast'));
    toast.show();

    // Limpiar formulario
    this.reset();
    this.classList.remove('was-validated');

    // Aquí podrías enviar los datos a tu servidor
    console.log('Datos de la reserva:', formData);
});

// Establecer fecha mínima como hoy
document.getElementById('fechaPrueba').min = new Date().toISOString().split('T')[0];

// Validación de teléfono
document.getElementById('telefonoPrueba').addEventListener('input', function(e) {
    const value = e.target.value.replace(/\D/g, '');
    e.target.value = value.replace(/(\d{3})(\d{3})(\d{3})/, '$1-$2-$3');
});

// Validación de email
document.getElementById('emailPrueba').addEventListener('input', function(e) {
    const email = e.target.value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    e.target.setCustomValidity(emailRegex.test(email) ? '' : 'Por favor ingresa un email válido');
});

// Calculadora de Financiamiento
function actualizarCalculadora() {
            const precio = document.getElementById('precioRange').value;
            const cuotaInicial = document.getElementById('cuotaRange').value;
            const plazo = document.getElementById('plazoSelect').value;

            // Cálculo básico (se puede hacer más complejo)
            const montoFinanciar = precio * (1 - cuotaInicial/100);
            const tasaAnual = 0.12; // 12% anual
            const tasaMensual = tasaAnual / 12;
            const cuotaMensual = (montoFinanciar * tasaMensual) / (1 - Math.pow(1 + tasaMensual, -plazo));

            document.getElementById('precioOutput').textContent = `$${precio}`;
            document.getElementById('cuotaOutput').textContent = `${cuotaInicial}%`;
            document.getElementById('cuotaMensual').textContent = `$${cuotaMensual.toFixed(2)}`;
        }

        // Event listeners para la calculadora
        document.getElementById('precioRange').addEventListener('input', actualizarCalculadora);
        document.getElementById('cuotaRange').addEventListener('input', actualizarCalculadora);
        document.getElementById('plazoSelect').addEventListener('change', actualizarCalculadora);

        // Comparador de Modelos
        const especificaciones = {
            'Toyota Corolla 2024': {
                'Motor': '2.0L 4-cilindros',
                'Potencia': '169 HP',
                'Transmisión': 'CVT',
                'Consumo': '18.5 km/l'
            },
            'Honda Civic 2024': {
                'Motor': '1.5L Turbo',
                'Potencia': '180 HP',
                'Transmisión': 'CVT',
                'Consumo': '17.8 km/l'
            },
            'Nissan Sentra 2024': {
                'Motor': '2.0L 4-cilindros',
                'Potencia': '149 HP',
                'Transmisión': 'CVT',
                'Consumo': '16.9 km/l'
            }
        };

        function actualizarComparacion(modeloId, specsId) {
            const modelo = document.getElementById(modeloId).value;
            const specsContainer = document.getElementById(specsId);
            specsContainer.innerHTML = '';

            if (especificaciones[modelo]) {
                for (let [caracteristica, valor] of Object.entries(especificaciones[modelo])) {
                    specsContainer.innerHTML += `
                        <div class="specs-row p-2">
                            <strong>${caracteristica}:</strong> ${valor}
                        </div>
                    `;
                }
            }
        }

        // Event listeners para el comparador
        document.getElementById('modelo1').addEventListener('change', () => actualizarComparacion('modelo1', 'specs1'));
        document.getElementById('modelo2').addEventListener('change', () => actualizarComparacion('modelo2', 'specs2'));

        // Inicializar calculadora
        actualizarCalculadora();


        // Objeto con las URLs de las imágenes para cada color y ángulo
        const carImages = {
            rojo: {
                frente: "https://tmna.aemassets.toyota.com/is/image/toyota/toyota/jellies/max/2024/mirai/limited/3003/3u5/36/1.png?fmt=webp-alpha&wid=930&qlt=90",
                lado: "https://tmna.aemassets.toyota.com/is/image/toyota/toyota/jellies/max/2024/mirai/limited/3003/3u5/36/29.png?fmt=webp-alpha&wid=930&qlt=90",
                trasera: "https://tmna.aemassets.toyota.com/is/image/toyota/toyota/jellies/max/2024/mirai/limited/3003/3u5/36/19.png?fmt=webp-alpha&wid=930&qlt=90",
                interior: "https://tmna.aemassets.toyota.com/is/image/toyota/toyota/vehicles/2024/mirai/mlp/short-gallery/MIR_MY24_0023_V002_6TO4FEdBzSrZ.png?fmt=jpeg&fit=crop&qlt=90&wid=1024"
            },
            azul: {
                frente: "https://www.toyota.com/imgix/responsive/images/mlp/colorizer/2024/camry/8X7/1.png",
                lado: "https://www.toyota.com/imgix/responsive/images/mlp/colorizer/2024/camry/8X7/2.png",
                trasera: "https://www.toyota.com/imgix/responsive/images/mlp/colorizer/2024/camry/8X7/3.png",
                interior: "https://www.toyota.com/imgix/responsive/images/mlp/colorizer/2024/camry/8X7/4.png"
            },
            // Agregar más colores según sea necesario
        };

        let currentColor = 'rojo';
        let currentAngle = 'frente';

        function cambiarColor(color) {
            currentColor = color;
            actualizarImagen();

            // Actualizar botones de color
            document.querySelectorAll('.color-option').forEach(btn => {
                btn.classList.remove('active');
            });
            event.target.classList.add('active');
        }

        function cambiarAngulo(angulo) {
            currentAngle = angulo;
            actualizarImagen();

            // Actualizar botones de ángulo
            document.querySelectorAll('.angle-button').forEach(btn => {
                btn.classList.remove('active');
            });
            event.currentTarget.classList.add('active');
        }

        function actualizarImagen() {
            const container = document.getElementById('carContainer');
            const imageUrl = carImages[currentColor]?.[currentAngle];
            const carImage = document.querySelector('.car-image');

            if (imageUrl) {
                carImage.src = imageUrl
            } else {
                container.innerHTML = `
                    <div class="text-center p-5">
                        <i class="fas fa-car fa-4x mb-3"></i>
                        <p>Vista previa no disponible</p>
                    </div>
                `;
            }
        }

        // Inicializar el configurador
        actualizarImagen();


        const serviciosDemo = {
    'OS-2024-001': {
        vehiculo: 'Toyota Corolla 2022',
        fecha: '15/02/2024',
        tipo: 'Mantenimiento preventivo',
        estado: 'En proceso',
        progreso: 60,
        etapa: 3
    },
    'OS-2024-002': {
        vehiculo: 'Honda Civic 2023',
        fecha: '14/02/2024',
        tipo: 'Cambio de aceite',
        estado: 'Control de calidad',
        progreso: 80,
        etapa: 4
    }
};

document.getElementById('formSeguimiento').addEventListener('submit', function(e) {
    e.preventDefault();
    const numeroOrden = document.getElementById('numeroOrden').value.trim();
    buscarOrden(numeroOrden);
});

function buscarOrden(numeroOrden) {
    const resultado = document.getElementById('resultadoSeguimiento');
    const error = document.getElementById('errorMensaje');
    const servicio = serviciosDemo[numeroOrden];

    if (servicio) {
        // Mostrar resultado y ocultar error
        resultado.style.display = 'block';
        error.style.display = 'none';

        // Actualizar información
        document.getElementById('vehiculoInfo').textContent = servicio.vehiculo;
        document.getElementById('fechaInfo').textContent = servicio.fecha;
        document.getElementById('tipoServicioInfo').textContent = servicio.tipo;
        document.getElementById('estadoInfo').textContent = servicio.estado;

        // Actualizar barra de progreso
        document.getElementById('progressBar').style.width = `${servicio.progreso}%`;

        // Actualizar timeline
        actualizarTimeline(servicio.etapa);
    } else {
        resultado.style.display = 'none';
        error.style.display = 'block';
    }
}

function actualizarTimeline(etapaActual) {
    for (let i = 1; i <= 5; i++) {
        const step = document.getElementById(`step${i}`);
        const icon = step.querySelector('i');

        if (i < etapaActual) {
            // Etapas completadas
            step.classList.add('active');
            icon.className = 'fas fa-check-circle text-success';
        } else if (i === etapaActual) {
            // Etapa actual
            step.classList.add('active');
            icon.className = 'fas fa-circle text-primary';
        } else {
            // Etapas pendientes
            step.classList.remove('active');
            icon.className = 'fas fa-circle text-secondary';
        }
    }
}

function agendarCita() {
    let tipoServicio = document.getElementById("tipoServicio").value;
    let fechaHora = document.getElementById("fechaHora").value;
    let email = document.getElementById("email").value;
    let confirmacion = document.getElementById("confirmacion");

    if (!fechaHora || !email) {
        alert("Por favor, completa todos los campos");
        return;
    }

    confirmacion.innerHTML = `Tu cita para <strong>${tipoServicio}</strong> ha sido agendada para <strong>${new Date(fechaHora).toLocaleString()}</strong>. Se enviará un correo de confirmación a <strong>${email}</strong>.`;
    confirmacion.style.display = "block";

    enviarCorreo(email, tipoServicio, fechaHora);
}

function enviarCorreo(email, servicio, fechaHora) {
    fetch("enviar_correo.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({ email: email, servicio: servicio, fechaHora: fechaHora })
    }).then(response => response.json())
      .then(data => console.log("Correo enviado: ", data))
      .catch(error => console.error("Error al enviar correo: ", error));
}

// Calendario Interactivo (con FullCalendar)
document.addEventListener("DOMContentLoaded", function() {
    var calendarEl = document.getElementById("calendario");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        selectable: true,
        dateClick: function(info) {
            document.getElementById("fechaHora").value = info.dateStr + "T10:00";
        }
    });
    calendar.render();
});
</script>

<!-- Agregar FullCalendar -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.js">
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
