<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Login/Login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Login/responsive.css') }}">
</head>

<body>
    <div class="login-container vh-100 d-flex justify-content-center align-items-center">
        <div class="login-box">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center bauto">Iniciar Sesión</h1>

                    <!-- Mensajes de Error Generales -->
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Mensajes de Error -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Mensaje de Éxito -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('login.post') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="correo" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="correo" name="correo"
                                placeholder="Ingrese su correo electrónico" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contraseña" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="contraseña" name="contraseña"
                                placeholder="Ingrese su contraseña" required>
                        </div>
                        <div class="form-buttons text-center">
                            <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                        </div>
                        <p class="text-center mt-3">¿No tienes una cuenta? <a
                                href="{{ route('register') }}">Regístrate</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
