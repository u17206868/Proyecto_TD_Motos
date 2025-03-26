@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <!-- Información del usuario -->
            <div class="col-md-8">
                <div class="card shadow-lg border-0">
                    <div class="card-body text-center py-5">
                        <i class="bi bi-person-circle text-primary" style="font-size: 6rem;"></i>
                        <h3 class="mt-3 fw-bold">{{ Session::get('usuario_nombre') }}</h3>
                        <p class="text-muted mb-1">Correo Electrónico: <span
                                class="fw-light">{{ Session::get('usuario_email') }}</span></p>
                        <p class="text-muted mb-1">Teléfono: <span
                                class="fw-light">{{ Session::get('usuario_celular') ?? 'No registrado' }}</span></p>
                        <p class="text-muted mb-1">Tipo de Usuario: <span
                                class="fw-light">{{ ucfirst(Session::get('usuario_tipo') ?? 'Usuario') }}</span></p>
                        <p class="text-muted">Registrado Desde: <span
                                class="fw-light">{{ date('d/m/Y', strtotime(Session::get('usuario_created_at'))) ?? 'N/A' }}</span>
                        </p>
                        <a href="{{ route('perfil.edit') }}" class="btn btn-primary mt-3 px-4 py-2">Editar Perfil</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detalles adicionales -->
        <div class="d-flex justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card shadow-lg border-0">
                    <div class="card-body">
                        <h4 class="text-primary text-center mb-4">Actividad Reciente</h4>
                        <table class="table table-bordered text-center">
                            <tbody>
                                <tr>
                                    <th>Última vez que iniciaste sesión:</th>
                                    <td>{{ Session::get('usuario_last_login') ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Total de autos comprados:</th>
                                    <td>{{ Session::get('usuario_autos_comprados') ?? 0 }}</td>
                                </tr>
                                <tr>
                                    <th>Total de autos vendidos:</th>
                                    <td>{{ Session::get('usuario_autos_vendidos') ?? 0 }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 15px;
            overflow: hidden;
        }

        .card-body {
            font-size: 1rem;
            color: #333;
        }

        h3 {
            color: #333;
        }

        .table {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .table th {
            background-color: #007bff;
            color: white;
            font-weight: 600;
        }

        .btn-primary {
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>
