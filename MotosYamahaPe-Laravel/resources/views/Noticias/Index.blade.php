<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias de Autos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{ asset('css/Noticias/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Noticias/Noticias.css') }}">
    <style>
        /* Mejoras visuales manteniendo la estructura original */
        .bg-dark {
            background: linear-gradient(145deg, #1a1a1a, #2c3e50) !important;
        }

        .carousel-item img {
            height: 600px;
            object-fit: cover;
            border-radius: 8px;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(5px);
            border-radius: 8px;
            padding: 2rem;
            bottom: 2rem;
            right: 2rem;
            left: 2rem;
        }

        .highlight-title {
            font-size: 2rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            margin-bottom: 1rem;
        }

        .carousel-caption p {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }

        .btn-warning {
            padding: 0.8rem 2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-warning:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(255, 193, 7, 0.3);
        }

        .card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .card-img-top {
            height: 220px;
            object-fit: cover;
        }

        .news-category {
            position: absolute;
            top: 1rem;
            left: 1rem;
            padding: 0.5rem 1.2rem;
            border-radius: 50px;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .card-title {
            font-size: 1.4rem;
            font-weight: 700;
            margin: 1rem 0;
        }

        .card-text {
            color: #555;
            line-height: 1.6;
        }

        small {
            background: #f8f9fa;
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            font-size: 0.85rem;
            color: #666;
        }

        .btn-primary {
            border-radius: 50px;
            padding: 0.8rem 1.5rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(13, 110, 253, 0.3);
        }

        .carousel-control-prev, .carousel-control-next {
            width: 5%;
            opacity: 0.8;
        }

        .carousel-indicators {
            bottom: 1rem;
        }

        .carousel-indicators button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 0 6px;
        }

        section {
            padding: 4rem 0;
        }

        h2 {
            margin-bottom: 3rem;
            position: relative;
            font-weight: 700;
        }

        h2:after {
            content: '';
            position: absolute;
            bottom: -1rem;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #ffc107;
            border-radius: 2px;
        }

        @media (max-width: 768px) {
            .carousel-item img {
                height: 400px;
            }
            
            .carousel-caption {
                padding: 1rem;
                bottom: 1rem;
                right: 1rem;
                left: 1rem;
            }

            .highlight-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <!-- Sección de Noticias Destacadas -->
    <section class="bg-dark text-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Últimas Noticias Destacadas</h2>
            <div id="noticiasDestacadas" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Primera Noticia -->
                    <div class="carousel-item active">
                        <img src="https://www.tracklink.pe/contenido/blog/wp-content/uploads/2020/12/Etica-de-los-coches-autonomos.jpg"
                            class="d-block w-100" alt="Noticia Destacada 1">
                        <div class="carousel-caption d-none d-md-block animate__animated animate__fadeIn">
                            <h5 class="highlight-title">El Futuro de los Autos Autónomos</h5>
                            <p>Descubre cómo la tecnología de conducción autónoma está revolucionando el mundo
                                automotriz.</p>
                            <a href="https://www.kia.com/pe/discover-kia/ask/Are-self-driving-cars-the-future.html" target="_blank" class="btn btn-warning">
                                <i class="bi bi-arrow-right-circle"></i>Leer más</a>
                        </div>
                    </div>
                    <!-- Segunda Noticia -->
                    <div class="carousel-item">
                        <img src="https://i.blogs.es/4cacf4/nissan-ids-concept/1366_2000.jpg" class="d-block w-100"
                            alt="Noticia Destacada 2">
                        <div class="carousel-caption d-none d-md-block animate__animated animate__fadeIn">
                            <h5 class="highlight-title">Avances en Autos Eléctricos</h5>
                            <p>Conoce los nuevos modelos eléctricos que prometen un mejor rendimiento y mayor alcance.</p>
                            <a href="/noticia2" class="btn btn-warning">Leer más</a>
                        </div>
                    </div>
                    <!-- Tercera Noticia -->
                    <div class="carousel-item">
                        <img src="https://hips.hearstapps.com/hmg-prod/images/ssc-tuatara-record-30-1603122858.jpg?crop=0.823xw:0.696xh;0.0689xw,0.150xh&resize=980:*"
                            class="d-block w-100" alt="Noticia Destacada 3">
                        <div class="carousel-caption d-none d-md-block animate__animated animate__fadeIn">
                            <h5 class="highlight-title">El Auto Deportivo Más Rápido del Año</h5>
                            <p>Este auto redefine la velocidad y el diseño con innovaciones de última generación.</p>
                            <a href="/noticia3" class="btn btn-warning"><i class="bi bi-arrow-right-circle"></i>Leer más</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#noticiasDestacadas"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#noticiasDestacadas"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Sección de Noticias Generales -->
 <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Todas las Noticias de Autos</h2>
            <div class="row g-4"> <!-- Añadido g-4 para espaciado uniforme -->
                <!-- Noticia 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card animate__animated animate__fadeIn">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9Dr6IfChI1blw6ixOJvKcbFm-ssIgQjjIAg&s"
                            class="card-img-top" alt="Noticia 1">
                        <div class="news-category">Eléctricos</div>
                        <div class="card-body d-flex flex-column"> <!-- Estructura flex -->
                            <h5 class="card-title">Tesla presenta su nueva tecnología</h5>
                            <small class="text-muted">Publicado: 2 de enero</small>
                            <p class="card-text mt-2">Tesla ha revelado su nueva tecnología de baterías que promete mayor
                                autonomía.</p>
                            <div class="interaction-bar mt-auto"> <!-- mt-auto para empujar al fondo -->
                                <button class="interaction-button like-button">
                                    <i class="far fa-heart"></i>
                                    <span class="likes-count">245</span>
                                </button>
                                <button class="interaction-button bookmark-button">
                                    <i class="far fa-bookmark"></i>
                                </button>
                                <div class="position-relative">
                                    <button class="interaction-button share-button">
                                        <i class="fas fa-share"></i>
                                    </button>
                                    <div class="share-options">
                                        <button class="share-option" data-platform="facebook">
                                            <i class="fab fa-facebook"></i>Facebook
                                        </button>
                                        <button class="share-option" data-platform="twitter">
                                            <i class="fab fa-twitter"></i>Twitter
                                        </button>
                                        <button class="share-option" data-platform="whatsapp">
                                            <i class="fab fa-whatsapp"></i>WhatsApp
                                        </button>
                                        <button class="share-option" data-platform="linkedin">
                                            <i class="fab fa-linkedin"></i>LinkedIn
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <a href="https://www.elespanol.com/omicrono/tecnologia/20241011/robotaxi-elon-musk-tesla-presenta-coche-plazas-sin-volantes-pedales/892660743_0.html"
                                class="btn btn-primary w-100 mt-3">Leer más</a>
                        </div>
                    </div>
                </div>

                <!-- Noticia 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card animate__animated animate__fadeIn">
                        <img src="https://static.emol.cl/emol50/Fotos/2022/04/20/file_20220420133819.jpg"
                            class="card-img-top" alt="Noticia 2">
                        <div class="news-category">Deportivos</div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Ferrari lanza su modelo híbrido</h5>
                            <small class="text-muted">Publicado: 25 de diciembre</small>
                            <p class="card-text mt-2">El nuevo Ferrari combina velocidad y tecnología amigable con el medio
                                ambiente.</p>
                            <div class="interaction-bar mt-auto">
                                <button class="interaction-button like-button">
                                    <i class="far fa-heart"></i>
                                    <span class="likes-count">189</span>
                                </button>
                                <button class="interaction-button bookmark-button">
                                    <i class="far fa-bookmark"></i>
                                </button>
                                <div class="position-relative">
                                    <button class="interaction-button share-button">
                                        <i class="fas fa-share"></i>
                                    </button>
                                    <div class="share-options">
                                        <button class="share-option" data-platform="facebook">
                                            <i class="fab fa-facebook"></i>Facebook
                                        </button>
                                        <button class="share-option" data-platform="twitter">
                                            <i class="fab fa-twitter"></i>Twitter
                                        </button>
                                        <button class="share-option" data-platform="whatsapp">
                                            <i class="fab fa-whatsapp"></i>WhatsApp
                                        </button>
                                        <button class="share-option" data-platform="linkedin">
                                            <i class="fab fa-linkedin"></i>LinkedIn
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <a href="https://www.emol.com/noticias/Autos/2022/04/20/1058524/ferrari-lanzamiento-deportivo-hibrido.html"
                                class="btn btn-primary w-100 mt-3">Leer más</a>
                        </div>
                    </div>
                </div>

                <!-- Noticia 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card animate__animated animate__fadeIn">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdAqONlht5U2TR5daEc1Y7JtXRANikb3M00Q&s"
                            class="card-img-top" alt="Noticia 3">
                        <div class="news-category">Sostenibilidad</div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Toyota lidera en autos híbridos</h5>
                            <small class="text-muted">Publicado: 18 de diciembre</small>
                            <p class="card-text mt-2">Toyota sigue siendo líder en innovación con su nueva línea de autos
                                híbridos.</p>
                            <div class="interaction-bar mt-auto">
                                <button class="interaction-button like-button">
                                    <i class="far fa-heart"></i>
                                    <span class="likes-count">156</span>
                                </button>
                                <button class="interaction-button bookmark-button">
                                    <i class="far fa-bookmark"></i>
                                </button>
                                <div class="position-relative">
                                    <button class="interaction-button share-button">
                                        <i class="fas fa-share"></i>
                                    </button>
                                    <div class="share-options">
                                        <button class="share-option" data-platform="facebook">
                                            <i class="fab fa-facebook"></i>Facebook
                                        </button>
                                        <button class="share-option" data-platform="twitter">
                                            <i class="fab fa-twitter"></i>Twitter
                                        </button>
                                        <button class="share-option" data-platform="whatsapp">
                                            <i class="fab fa-whatsapp"></i>WhatsApp
                                        </button>
                                        <button class="share-option" data-platform="linkedin">
                                            <i class="fab fa-linkedin"></i>LinkedIn
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <a href="https://autotest.com.ar/noticias/toyota-lidera-mercado-hibridos/"
                                class="btn btn-primary w-100 mt-3">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
