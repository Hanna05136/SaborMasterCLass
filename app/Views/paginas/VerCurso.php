<?= $this->extend('Plantilla/layout1') ?>
<?= $this->section('contenido') ?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso Cocina Japonesa</title>
    <link rel="stylesheet" href="<?= base_url('css/vercurso.css') ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body><br>

    <!-- Header centrado -->
    <header class="header text-center">
        <h1 class="display-5">Curso de Cocina Japonesa: Sabores y Tradición</h1>
        <p class="subtitulo">Aprende los secretos del sushi, ramen, tempura y mucho más.</p>
        <p class="subtitulo">Domina ingredientes, técnicas y cultura nipona.</p>

        <div class="info-curso justify-content-center d-flex flex-wrap mt-4">
            <span class="fs-5 fw-bold text-warning">⭐ 4.8/5.0</span>
            <span class="fs-5 fw-bold text-warning">👥 1890 estudiantes</span>
            <span class="fs-5 fw-bold text-warning">👩‍🏫 Instructora: <a href="#">Haruka Nakamura</a></span>
        </div>
    </header>

    <!-- Contenido principal en 2 columnas -->
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- IZQUIERDA: contenido -->
            <div class="col-md-6 px-4">
                <section class="publico mb-5">
                    <h2 class="text-primary">¿A quién va dirigido?</h2>
                    <p>
                        Aficionados a la cocina, estudiantes de gastronomía y toda persona interesada en la cultura japonesa.
                        No necesitas experiencia, solo ganas de aprender y cocinar.
                    </p>
                </section>

                <section class="temario">
                    <h2 class="text-primary mb-4">Temario</h2>

                    <!-- Módulos como cards de Bootstrap -->
                    <?php
                    $modulos = [
                        ['Módulo 1', '2 clases', ['Introducción a la Cocina Japonesa', 'Ingredientes esenciales: arroz, algas, soja y más']],
                        ['Módulo 2', '3 clases', ['Preparación de sushi básico', 'Salsas japonesas', 'Utensilios y cortes tradicionales']],
                        ['Módulo 3', '3 clases', ['Platos calientes: ramen, yakisoba, miso', 'Tempura y fritura ligera', 'Presentación y emplatado']],
                        ['Módulo 4', '2 clases', ['Bento: preparación y balance', 'Onigiri y tamagoyaki casero']],
                        ['Módulo 5', '2 clases', ['Postres japoneses: mochi y dorayaki', 'Ceremonia del té: fundamentos']]
                    ];

                    foreach ($modulos as $modulo) :
                    ?>
                        <div class="card mb-3 shadow-sm border-warning">
                            <div class="card-body">
                                <h5 class="card-title text-dark"><?= $modulo[0] ?> | <?= $modulo[1] ?></h5>
                                <ul class="mb-0">
                                    <?php foreach ($modulo[2] as $tema) : ?>
                                        <li><?= $tema ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </section>
            </div>

            <!-- DERECHA: Video -->
            <!-- DERECHA: Video fijo al hacer scroll -->
            <!-- DERECHA: caja con video sticky usando .caja-curso -->
            <div class="col-md-6 px-4">
                <div class="caja-curso">
                    <iframe src="https://www.youtube.com/embed/gnkLCnBizqo"
                        title="Cómo Aprender a Cocinar" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>


        </div>
    </div>
</body>

<?= $this->endSection() ?>