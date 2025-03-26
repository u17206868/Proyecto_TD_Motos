<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro de Reclamaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Ayuda/responsiveli.css') }}">
    <style>
        .form-section {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-section h2 {
            color: #495057;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-submit {
            background-color: #007bff;
            color: #fff;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container mt-5 mb-5">
        <h1 class="text-center mb-4">Libro de Reclamaciones</h1>
        <p class="text-center">Tu opinión es importante para nosotros. Por favor, llena este formulario para registrar
            tu
            reclamo o sugerencia.</p>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-section">
                    <h2 class="mb-4">Formulario de Reclamo</h2>
                    <form action="{{ route('libro.reclamaciones.submit') }}" method="POST">
                        @csrf
                        <!-- Información Personal -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                placeholder="Ingresa tu nombre completo" required>
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="correo" name="correo"
                                placeholder="Ingresa tu correo electrónico" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono"
                                placeholder="Ingresa tu número de teléfono" required>
                        </div>

                        <!-- Detalles del Reclamo -->
                        <div class="mb-3">
                            <label for="tipo_reclamo" class="form-label">Tipo de Reclamo</label>
                            <select class="form-select" id="tipo_reclamo" name="tipo_reclamo" required>
                                <option value="">Selecciona una opción</option>
                                <option value="producto">Producto</option>
                                <option value="servicio">Servicio</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción del Reclamo</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="5"
                                placeholder="Describe tu reclamo o sugerencia" required></textarea>
                        </div>

                        <!-- Botón de Enviar -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-submit btn-lg">Enviar Reclamo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
