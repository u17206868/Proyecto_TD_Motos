<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tips_y_guias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-section {
            background-color: #f9f9f9;
            padding: 20px 15px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .form-section h2 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 20px;
        }

        .form-section .form-label {
            font-size: 0.9rem;
            font-weight: 600;
            color: #333;
        }

        .form-section .form-control {
            font-size: 0.875rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .form-section .btn {
            font-size: 0.9rem;
            padding: 10px 15px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <!-- Título Principal -->
        <h1 class="text-center mb-4 section-title">Tips y Guías para el Cuidado de tu Vehículo</h1>

        <!-- Sección de Introducción -->
        <div class="mb-5 text-center">
            <p class="text-muted lead">
                Descubre consejos útiles y guías prácticas para el mantenimiento, cuidado y personalización de tu
                vehículo.
                Mantén tu auto en perfecto estado con nuestra colección de artículos y recomendaciones.
            </p>
        </div>

        <!-- Consejos Destacados -->
        <section class="mb-5">
            <h2 class="mb-4 text-primary section-subtitle">Consejos Destacados</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm h-100 card-hover">
                        <img src="{{ asset('images/tips/mantenimiento.jpg') }}" class="card-img-top rounded-top"
                            alt="Mantenimiento">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Mantenimiento Preventivo</h5>
                            <p class="card-text text-muted">Descubre la importancia del mantenimiento preventivo y cómo
                                puede ayudarte
                                a evitar averías costosas.</p>
                            <a href="#" class="btn btn-outline-primary">Leer Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm h-100 card-hover">
                        <img src="{{ asset('images/tips/ahorro-combustible.jpg') }}" class="card-img-top rounded-top"
                            alt="Ahorro de Combustible">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Ahorro de Combustible</h5>
                            <p class="card-text text-muted">Aprende trucos para reducir el consumo de combustible y
                                ahorrar
                                dinero en cada viaje.</p>
                            <a href="#" class="btn btn-outline-primary">Leer Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm h-100 card-hover">
                        <img src="{{ asset('images/tips/cuidado-pintura.jpg') }}" class="card-img-top rounded-top"
                            alt="Cuidado de la Pintura">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Cuidado de la Pintura</h5>
                            <p class="card-text text-muted">Conoce las mejores técnicas para proteger la pintura de tu
                                auto
                                y mantenerlo como nuevo.</p>
                            <a href="#" class="btn btn-outline-primary">Leer Más</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Guías Paso a Paso -->
        <section class="mb-5">
            <h2 class="mb-4 text-primary section-subtitle">Guías Paso a Paso</h2>
            <div class="accordion accordion-flush" id="guidesAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="guideOne">
                        <button class="accordion-button text-primary fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Cómo Cambiar el Aceite de tu Auto
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="guideOne"
                        data-bs-parent="#guidesAccordion">
                        <div class="accordion-body">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item">Reúne las herramientas necesarias: aceite nuevo, filtro de
                                    aceite, llave inglesa y un recipiente para el aceite usado.</li>
                                <li class="list-group-item">Levanta el vehículo y localiza el tapón de drenaje.</li>
                                <li class="list-group-item">Drena el aceite viejo y reemplaza el filtro.</li>
                                <li class="list-group-item">Vierte el aceite nuevo y verifica los niveles.</li>
                                <li class="list-group-item">Recicla el aceite usado de manera responsable.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="guideTwo">
                        <button class="accordion-button collapsed text-primary fw-bold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Cómo Revisar los Frenos de tu Vehículo
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="guideTwo"
                        data-bs-parent="#guidesAccordion">
                        <div class="accordion-body">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item">Escucha ruidos inusuales al frenar.</li>
                                <li class="list-group-item">Inspecciona el grosor de las pastillas de freno.</li>
                                <li class="list-group-item">Revisa el nivel del líquido de frenos.</li>
                                <li class="list-group-item">Verifica la respuesta del pedal al frenar.</li>
                                <li class="list-group-item">Consulta a un profesional si notas alguna anomalía.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Artículos Recomendados -->
        <section class="mb-5">
            <h2 class="mb-4 text-primary section-subtitle">Artículos Recomendados</h2>
            <ul class="list-group shadow-sm">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#" class="text-decoration-none text-dark">Los Mejores Accesorios para tu Auto</a>
                    <span class="badge bg-primary rounded-pill">Nuevo</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#" class="text-decoration-none text-dark">Cómo Prepararte para un Viaje Largo</a>
                    <span class="badge bg-primary rounded-pill">Guía</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#" class="text-decoration-none text-dark">Errores Comunes al Conducir y Cómo
                        Evitarlos</a>
                    <span class="badge bg-primary rounded-pill">Tip</span>
                </li>
            </ul>
        </section>

        <!-- Formulario de Sugerencias -->
        <section>
            <h2 class="mb-4 text-primary section-subtitle text-center">¿Tienes alguna sugerencia?</h2>
            <form action="/sugerencias" method="POST" class="form-section mx-auto" style="max-width: 600px;">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre"
                        placeholder="Ingresa tu nombre" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Ingresa tu correo electrónico" required>
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje"
                        required></textarea>
                </div>
                <button type="submit" class="btn btn-success w-100">Enviar</button>
            </form>
        </section>
    </div>
</body>
