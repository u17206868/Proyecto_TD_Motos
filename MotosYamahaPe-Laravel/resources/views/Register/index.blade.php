<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear una cuenta</title>
    <link rel="stylesheet" href="{{ asset('css/Register/Register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Register/responsive.css') }}">
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header text-center">
                        <h3 class="bauto">Crear una cuenta</h3>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('register.post') }}">
                            @csrf
                            <div class="row datos">
                                <div class="mb-3 col">
                                    <label for="nombre" class="form-label">Nombres Completos</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        placeholder="Nombres Completos" required>
                                </div>
                                <div class="mb-3 col">
                                    <label for="apellido" class="form-label">Apellidos Completos</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido"
                                        placeholder="Apellidos Completos" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="celular" class="form-label">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular"
                                    placeholder="Celular" required>
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo"
                                    placeholder="nombre@ejemplo.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="contraseña" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="contraseña" name="contraseña"
                                    placeholder="Contraseña" required minlength="8">
                                <small class="form-text text-muted">La contraseña debe tener al menos 8
                                    caracteres.</small>
                            </div>
                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="password-confirm"
                                    name="contraseña_confirmation" placeholder="Confirmar Contraseña" required
                                    minlength="8">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input justify-content-center" id="terms">
                                <label class="form-check-label" for="terms">Acepto los <a href="#">Términos y
                                        Condiciones</a></label>
                            </div>
                            <div class="form-buttons">
                                <button type="submit" class="btn btn-primary">Registrarse</button>
                                <p>Tienes una cuenta? <a href="{{ route('login') }}">Inicia Sesión</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
