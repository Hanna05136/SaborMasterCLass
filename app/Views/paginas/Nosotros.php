<?= $this->extend('Plantilla/layout') ?>
<?= $this->section('contenido') ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/Home.css" />
</head>

    <!-- SECCIÓN NOSOTROS -->
    <section class="container my-5">
        <h2 class="text-center fw-bold mb-4">Nosotros</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="lead">Master Class te ofrece cursos innovadores para perfeccionar tus habilidades culinarias. Organizados por niveles, tipos de cocina y recetas, garantizan un aprendizaje personalizado. Además, nuestras clases son presenciales y adaptadas a tu disponibilidad, brindándote la mejor experiencia educativa.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="Imagenes/cocina.jpg" alt="Cocina" class="img-fluid rounded-4 shadow">
            </div>
        </div>
    </section>

    <!-- TESTIMONIOS -->
    <section class="container my-5">
        <div class="row g-4">
            <!-- Tarjeta 1 -->
            <div class="col-md-6">
                <div class="card testimonial-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <img src="laura.jpg" class="rounded-circle me-3" width="50" height="50" alt="Laura Gómez">
                            <div>
                                <strong>Laura Gómez</strong><br>
                                <small>Amante de la gastronomía</small>
                            </div>
                        </div>
                        <p>“Una experiencia increíble. Aprendí técnicas profesionales y descubrí nuevos sabores. ¡Cocinar sea divertido y accesible!”</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="col-md-6">
                <div class="card testimonial-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <img src="diego.jpg" class="rounded-circle me-3" width="50" height="50" alt="Diego Fernández">
                            <div>
                                <strong>Diego Fernández</strong><br>
                                <small>Emprendedor</small>
                            </div>
                        </div>
                        <p>“Los cursos son súper completos y bien organizados. Se entiende la parte práctica y la oportunidad de aprender desde cero. ¡Ahora cocino como un profesional!”</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="col-md-6">
                <div class="card testimonial-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <img src="mariana.jpg" class="rounded-circle me-3" width="50" height="50" alt="Mariana Ríos">
                            <div>
                                <strong>Mariana Ríos</strong><br>
                                <small>Arquitecta</small>
                            </div>
                        </div>
                        <p>“Una experiencia excepcional, con calidad y atención única en cada clase. Totalmente recomendado para quienes buscan lo mejor.”</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 4 -->
            <div class="col-md-6">
                <div class="card testimonial-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <img src="carlos.jpg" class="rounded-circle me-3" width="50" height="50" alt="Carlos Méndez">
                            <div>
                                <strong>Carlos Méndez</strong><br>
                                <small>Senior Marketing Specialist</small>
                            </div>
                        </div>
                        <p>“Nunca pensé que podría hacer postres tan espectaculares. ¡El método es claro y nos rendimos de primera clase! ¡Recomiendo esta escuela al 100%!”</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<?= $this->endSection() ?>