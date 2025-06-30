<?= $this->extend('Plantilla/layout') ?>
<?= $this->section('contenido') ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/Cursos.css" />
</head>

<!-- Hero o espacio superior si aplica -->
<main class="container-fluid px-2 px-md-4 py-5" style="margin-top: 100px;">
    <h2 class="text-center fw-bold mb-4">Cursos</h2>

    <!-- Barra de búsqueda y filtros -->
    <div class="d-flex flex-wrap flex-md-nowrap justify-content-between align-items-center mb-5 gap-3">
        <!-- Búsqueda -->
        <div class="flex-grow-1">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar" />
                <button class="btn btn-dark" type="button">🔍</button>
            </div>
        </div>

        <!-- Filtros -->
        <div class="d-flex flex-wrap justify-content-end gap-2">
            <button class="btn btn-secondary btn-sm">🆕 Nuevos</button>
            <button class="btn btn-outline-secondary btn-sm">Precio mayor</button>
            <button class="btn btn-outline-secondary btn-sm">Precio menor</button>
            <button class="btn btn-outline-secondary btn-sm">Ranking</button>
        </div>
    </div>

    <!-- Contenido de cursos y opiniones -->
    <div class="row">
        <!-- Lista de cursos -->
        <div class="col-lg-9">
            <div class="row g-3 g-lg-4 justify-content-center">

                <!-- Curso 1 -->
                <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                    <div class="card curso-card position-relative w-100">
                        <span class="rating">★ 5.0</span>
                        <img src="imagenes/reposteria_creativa.jpg" class="card-img-top" alt="Repostería Creativa">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Repostería Creativa</h5>
                            <p class="card-text">🍰 Domina el arte de la repostería con técnicas profesionales.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <span class="price">$295.000</span>
                                <button class="btn btn-purple"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Curso 2 -->
                <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                    <div class="card curso-card position-relative w-100">
                        <span class="rating">★ 4.5</span>
                        <img src="imagenes/cocina_internacional.jpg" class="card-img-top" alt="Cocina Internacional">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Cocina Internacional</h5>
                            <p class="card-text">🌍 Explora sabores del mundo con este curso multicultural.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <span class="price">$134.500</span>
                                <button class="btn btn-purple"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Curso 3 -->
                <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                    <div class="card curso-card position-relative w-100">
                        <span class="rating">★ 4.0</span>
                        <img src="imagenes/Cocina Japonesa Tradicional.jpeg" class="card-img-top" alt="Cocina Internacional">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Cocina Japonesa Tradicional</h5>
                            <p class="card-text">📘 Sumérgete en los sabores auténticos del Japón: sushi, ramen, tempura y más.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <span class="price">$149.000</span>
                                <button class="btn btn-purple"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Curso 4 -->

                <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                    <div class="card curso-card position-relative w-100">
                        <span class="rating">★ 5.0</span>
                        <img src="imagenes/Gastronomia_vegetariana.jpg" class="card-img-top" alt="Cocina Internacional">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"> Gastronomía Vegetariana Moderna</h5>
                            <p class="card-text">🥗 Aprende a crear platos vegetarianos equilibrados y deliciosos con ingredientes frescos</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <span class="price">$128.000</span>
                                <button class="btn btn-purple"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                  <!-- Curso 5 -->

                <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                    <div class="card curso-card position-relative w-100">
                        <span class="rating">★ 4.3</span>
                        <img src="imagenes/Sabores-del-Medio-Oriente.jpg" class="card-img-top" alt="Cocina Internacional">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Sabores del Medio Oriente</h5>
                            <p class="card-text">🥘 Descubre el arte culinario del hummus, falafel, shawarma y especias únicas.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <span class="price">$139.000</span>
                                <button class="btn btn-purple"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                  <!-- Curso 6 -->

                <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                    <div class="card curso-card position-relative w-100">
                        <span class="rating">★ 4.9</span>
                        <img src="imagenes/Panaderia-artesanal.jpg" class="card-img-top" alt="Cocina Internacional">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Panadería Artesanal desde Cero</h5>
                            <p class="card-text">🍞 Domina las técnicas para hornear panes rústicos, integrales y fermentados.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <span class="price">$132.000</span>
                                <button class="btn btn-purple"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                  <!-- Curso 7 -->

                <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                    <div class="card curso-card position-relative w-100">
                        <span class="rating">★ 4.1</span>
                        <img src="imagenes/Parrila-y-Asado.jpg" class="card-img-top" alt="Cocina Internacional">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Técnicas de Parrilla y Asado</h5>
                            <p class="card-text">🔥 Conviértete en maestro del asado con cortes, marinados y técnicas de cocción.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <span class="price">$137.000</span>
                                <button class="btn btn-purple"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                  <!-- Curso 8 -->

                <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                    <div class="card curso-card position-relative w-100">
                        <span class="rating">★ 4.6</span>
                        <img src="imagenes/Cocina-Italiana-clasica.jpg" class="card-img-top" alt="Cocina Internacional">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Cocina Italiana Clásica</h5>
                            <p class="card-text">🍝 Aprende a preparar pasta fresca, risottos y postres italianos como un chef.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <span class="price">$142.000</span>
                                <button class="btn btn-purple"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Opiniones -->
        <div class="col-lg-3 mt-4 mt-lg-0">
            <h5 class="mb-3">Opiniones de estudiantes</h5>

            <!-- Comentario -->
            <div class="card testimonial-card mb-3">
                <div class="quote-mark">“</div>
                <div class="card-body">
                    <h6 class="card-title">María López</h6>
                    <small class="text-muted">★ 5.0</small>
                    <p class="card-text mt-2">El curso de repostería fue increíble. Aprendí muchísimo.</p>
                </div>
            </div>

            <div class="card testimonial-card mb-3">
                <div class="quote-mark">“</div>
                <div class="card-body">
                    <h6 class="card-title">Carlos Jiménez</h6>
                    <small class="text-muted">★ 4.5</small>
                    <p class="card-text mt-2">La cocina japonesa me encantó. Muy bien explicado.</p>
                </div>
            </div>

            <div class="card testimonial-card mb-3">
                <div class="quote-mark">“</div>
                <div class="card-body">
                    <h6 class="card-title">Luis Herrera</h6>
                    <small class="text-muted">★ 5.0</small>
                    <p class="card-text mt-2">¡Excelente curso de cocina internacional! Me abrió el apetito por aprender más sobre otras culturas.</p>
                </div>
            </div>

            <div class="card testimonial-card mb-3">
                <div class="quote-mark">“</div>
                <div class="card-body">
                    <h6 class="card-title">Ana Sofía Ríos</h6>
                    <small class="text-muted">★ 4.7</small>
                    <p class="card-text mt-2">Muy buenos instructores y recetas fáciles de seguir. ¡Recomiendo el curso de cocina rápida!</p>
                </div>
            </div>

        </div>
    </div>

</main>
<?= $this->endSection() ?>










































