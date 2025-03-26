@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h3 class="mb-4 text-primary">Editar Perfil</h3>
                        <form action="{{ route('perfil.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    value="{{ $usuario->nombre }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo"
                                    value="{{ $usuario->correo }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="celular" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" id="celular" name="celular"
                                    value="{{ $usuario->celular }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
