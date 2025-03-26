<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/Partials/Footer.css') }}">

<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-start">
            <!-- Usados -->
            <div class="footer-column">
                <h5 class="text-uppercase text-white fw-bold">Usados</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('autos.index') }}" class="text-white g">Autos</a></li>
                    <li><a href="{{ route('motos.index') }}" class="text-white g">Motos</a></li>
                </ul>
            </div>
            <!-- Nuevos -->
            <div class="footer-column">
                <h5 class="text-uppercase text-white fw-bold">Nuevos</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('autos.index') }}" class="text-white g">Autos</a></li>
                    <li><a href="{{ route('motos.index') }}" class="text-white g">Motos</a></li>
                </ul>
            </div>
            <!-- Servicios -->
            <div class="footer-column">
                <h5 class="text-uppercase text-white fw-bold">Servicios</h5>
                <ul class="list-unstyled">
                    <li><a href="/servicios" class="text-white g">Nuestros Servicios</a></li>
                </ul>
            </div>
            <!-- Ayuda -->
            <div class="footer-column">
                <h5 class="text-uppercase text-white fw-bold">Ayuda</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('ayuda.terminos') }}" class="text-white g">Términos y
                            condiciones</a></li>
                    <li><a href="{{ route('ayuda.politicas_publicacion') }}"
                            class="text-white g">Políticas de publicación</a></li>
                    <li><a href="{{ route('ayuda.politicas_privacidad') }}"
                            class="text-white g">Políticas de privacidad</a></li>
                    <li><a href="{{ route('ayuda.politica_cookies') }}" class="text-white g">Política
                            de cookies</a></li>
                    <li><a href="{{ route('ayuda.legales') }}" class="text-white g">Legales</a></li>
                    <li><a href="{{ route('ayuda.libro_reclamaciones') }}"
                            class="text-white g">Libro
                            de reclamaciones</a></li>
                </ul>
            </div>
            <!-- Sobre MotosYamaha.pe -->
            <div class="footer-column">
                <h5 class="text-uppercase text-white fw-bold">Sobre MotosYamaha.pe</h5>
                <ul class="list-unstyled">
                    <li><a href="/noticias" class="text-white g">Noticias</a></li>
                    <li><a href="{{ route('ayuda.tips_y_guias') }}" class="text-white g">Tips y
                            Guías</a></li>
                    <li><a href="/ayuda-en-linea" class="text-white g">Ayuda en Línea</a></li>
                </ul>
            </div>
            <!-- Redes Sociales -->
            <div class="footer-column">
                <h5 class="text-uppercase text-white fw-bold">Síguenos</h5>
                <div class="d-flex gap-3">
                    <a href="https://linkedin.com" target="_blank" class="text-white"><i class="bi bi-linkedin"></i></a>
                    <a href="https://tiktok.com" target="_blank" class="text-white"><i class="bi bi-tiktok"></i></a>
                    <a href="https://youtube.com" target="_blank" class="text-white"><i class="bi bi-youtube"></i></a>
                    <a href="https://instagram.com" target="_blank" class="text-white"><i
                            class="bi bi-instagram"></i></a>
                    <a href="https://twitter.com" target="_blank" class="text-white"><i class="bi bi-twitter"></i></a>
                    <a href="https://facebook.com" target="_blank" class="text-white"><i class="bi bi-facebook"></i></a>
                </div>
            </div>
        </div>

        <hr class="bg-secondary my-4">

        <div class="text-center text-white">
            <p class="mb-0 text-white">&copy; <?php echo date('Y') ?> MotosYamaha.pe. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>
