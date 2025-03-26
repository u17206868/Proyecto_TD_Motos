<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto Profesional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Añadimos Leaflet para el mapa -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #6c757d;
            --success-color: #28a745;
            --bg-light: #f8f9fa;
            --danger-color: #dc3545;
            --whatsapp-color: #25D366;
        }

        body {
            background-color: var(--bg-light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .contact-container {
            max-width: 700px;
            margin: 2rem auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            transition: transform 0.3s ease;
        }

        .contact-container:hover {
            transform: translateY(-5px);
        }

        /* Nuevo: Efecto de brillo en el borde */
        .contact-container::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #007bff, #00ff88, #007bff);
            z-index: -1;
            border-radius: 17px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .contact-container:hover::before {
            opacity: 1;
        }

        .form-control,
        .form-select {
            border-radius: 10px;
            padding: 12px;
            transition: all 0.3s ease;
            border: 2px solid #e9ecef;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            transform: translateY(-2px);
        }

        /* Nuevo: Estilo para campos inválidos */
        .form-control.is-invalid,
        .form-select.is-invalid {
            border-color: var(--danger-color);
            background-image: none;
        }

        .btn-submit {
            color: #fff;
            background: linear-gradient(45deg, var(--primary-color), #0056b3);
            border: none;
            border-radius: 10px;
            padding: 12px 24px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
        }

        /* Nuevo: Efecto de onda al hacer click */
        .btn-submit::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }

        .btn-submit:active::after {
            width: 300px;
            height: 300px;
        }

        /* Nuevo: Animación para el mensaje de éxito */
        @keyframes successSlideIn {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }

            7% {
                transform: translateY(0);
                opacity: 1;
            }

            93% {
                transform: translateY(0);
                opacity: 1;
            }

            100% {
                transform: translateY(-100%);
                opacity: 0;
            }
        }

        .success-message {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--success-color);
            color: white;
            padding: 1rem 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
            display: none;
            z-index: 1000;
            animation: successSlideIn 3s ease forwards;
        }

        /* Nuevo: Estilo mejorado para el tooltip de WhatsApp */
        .whatsapp-tooltip {
            background: linear-gradient(45deg, #075e54, #128c7e);
            padding: 10px 15px;
            border-radius: 8px;
            font-size: 14px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .whatsapp-tooltip::after {
            content: '';
            position: absolute;
            bottom: -8px;
            right: 25px;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 8px solid #128c7e;
        }

        /* Nuevo: Estilo para archivo adjunto */
        .file-upload {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .file-upload input {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .file-upload-label {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px;
            border: 2px dashed #dee2e6;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .file-upload-label:hover {
            border-color: var(--primary-color);
            background-color: rgba(0, 123, 255, 0.05);
        }

        .file-name {
            font-size: 0.9rem;
            color: var(--secondary-color);
            margin-top: 5px;
        }

        /* Nuevo: Estilos para la previsualización de archivos */
        .file-preview-container {
            margin-top: 15px;
            padding: 15px;
            border-radius: 8px;
            background-color: #f8f9fa;
            display: none;
        }

        .file-preview-container.active {
            display: block;
        }

        .preview-image {
            max-width: 200px;
            max-height: 200px;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .preview-document {
            display: flex;
            align-items: center;
            padding: 10px;
            background: white;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .preview-document i {
            font-size: 24px;
            margin-right: 10px;
        }

        .file-info {
            margin-top: 8px;
            font-size: 0.9em;
            color: #666;
        }

        /* Nuevo: Estilos para el mapa */
        #locationMap {
            height: 200px;
            border-radius: 8px;
            margin-top: 10px;
            border: 2px solid #eee;
        }

        .location-info {
            margin-top: 8px;
            padding: 8px;
            background-color: #f8f9fa;
            border-radius: 4px;
            font-size: 0.9em;
        }

        .progress {
            height: 4px;
            margin-top: 8px;
        }

        /* Estilos para el dropzone */
        .file-upload-dropzone {
            border: 2px dashed #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .file-upload-dropzone.dragover {
            border-color: var(--primary-color);
            background-color: rgba(0, 123, 255, 0.05);
        }

        #message {
            width: 100%;
            padding: 5px
        }
    </style>
</head>

<body>
    <!--Banner de Inicio -->
    <div class= "banner-container">
        <div class="flex flex-col items-center w-full">
            <div class="flex-1">
                <img alt="Contáctanos" class="w-100 h-auto object-cover" loading="lazy"
                    src="{{ asset('images/contactenosB.jpg') }}">
            </div>
        </div>
    </div>
    <div class="relative my-5">
        <div class ="flex flex-1 items-end py-12 translate-x-0">
            <div class="container">
                <div class="prose prose-white prose-h1:mb-0">
                    <h1> Nosotros </h1>
                </div>
            </div>
        </div>
        <div class="container max-w-5xl py-8">
            <div class="mb-3">
                <div>
                    <strong> TuAutope </strong> es tu aliado confiable en el mercado automotriz peruano.
                    Con <strong> años de experiencia </strong> te ofrecemos soluciones completas para la compra y venta
                    de autos
                    y motos, brindándote calidad, confianza y un servicio excepcional. <strong> ¡Contáctanos y descrubre
                        la diferencia! </strong>
                </div>
            </div>
            <!--Formulario para Consulta-->
            <div class="card contact-form p-5" id="contactForm">
                <div class="form-header">
                    <h1> Contáctanos</h1>
                    <p>Completa el formulario y nos pondremos en contacto contigo.</p>
                </div>
                <form id="form" onsubmit="showThankYouMessage(event)">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre Completo *</label>
                        <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre"
                            required="">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico *</label>
                        <input type="email" class="form-control" id="email" placeholder="ejemplo@correo.com"
                            required="">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="phone"
                            placeholder="Ingresa tu número de teléfono">
                    </div>
                    <div class="mb-3">
                        <label for="service" class="form-label">Servicio Necesitado*</label>
                        <select class="form-select" id="service" required="">
                            <option selected="" disabled="">Selecciona una opción</option>
                            <option value="Consultin">Consultoría</option>
                            <option value="reclam">Reclamos</option>
                            <option value="coti">Cotización</option>
                        </select>
                    </div>
                    <div class="mb-3 d-flex flex-column align-items-start">
                        <label for="message" class="form-label">Mensaje*</label>
                        <textarea class="" id="message" rows="4" placeholder="Escribe tu mensaje aquí..." required=""></textarea>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn-submit">Enviar Mensaje</button>
                    </div>
                </form>
            </div>
            <!-- Mensaje de Agradecimieno -->
            <div class="container py-12" id="thankYouMessage" style="display:none;">
                <div
                    class="max-w-2xl px-6 mx-auto text-center border rounded-md xs:px-16 py-9 border-boulder text-boulder">
                    <div class="divide-y divide-silver">
                        <div class="pb-7">
                            <h2 class="text-2xl font-semibold xs:text-3l text-toyotared">GRACIAS POR CONTACTARNOS</h2>
                            <p class="text-lg font-semibold">AL CENTRO DE ATENCIÓN AL CLIENTE - TUAUTOPE S.A.</P>
                        </div>
                        <div class="xs:px-3 py-7">
                            <p>
                                SU CONSULTA NRO. 0155-2025-CONSUL SE HA REGISTRADO CON ÉXITO.<br>
                                VAMOS A REVISAR LA INFORMACIÓN Y LE BRINDAREMOS <br>
                                RESPUESTA A LA BREVEDAD.
                            </p>
                        </div>
                        <div class="xs:px-3 pt-7">
                            <p class="font-semibold">
                                ATENTAMENTE,<br>
                                CENTRO DE ATENCIÓN AL CLIENTE<br>
                                TUAUTOPE S.A.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
            </script>
            <script src="{{ asset('js/formulario.js') }}"></script>
</body>

</html>
