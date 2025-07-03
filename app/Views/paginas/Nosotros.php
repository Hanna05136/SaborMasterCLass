<?= $this->extend('Plantilla/layout') ?>
<?= $this->section('contenido') ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/Home.css" />
    <style>
        .testimonial-card {
            background-color: #000 !important;
            color: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.3);
            height: 100%;
        }

        .testimonial-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #fff;
        }

        .card-body small {
            color: #ccc;
        }

        /* Alternativa opcional personalizada */
        /* .texto-nosotros {
            font-size: 1.5rem;
            line-height: 1.8;
        } */
    </style>
</head>

<body>
    <!-- SECCIÓN NOSOTROS -->
    <section class="container my-5">
        <h2 class="text-center fw-bold mb-4">Nosotros</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="lead fs-3">
                    Master Class te ofrece cursos innovadores para perfeccionar tus habilidades culinarias. Organizados por niveles, tipos de cocina y recetas, garantizan un aprendizaje personalizado. Además, nuestras clases son presenciales y adaptadas a tu disponibilidad, brindándote la mejor experiencia educativa.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="imagenes/cocina.jpg" alt="Cocina" class="img-fluid rounded-4 shadow">
            </div>
        </div>
    </section>

    <!-- SECCIÓN TESTIMONIOS -->
    <section class="container my-5">
        <h2 class="text-center fw-bold mb-4">Testimonios</h2>
        <div class="row g-4">
            <!-- Tarjeta 1 -->
            <div class="col-md-6 col-12">
                <div class="card testimonial-card text-center">
                    <img src="imagenes/persona3.jpg" class="testimonial-img mx-auto mb-3" alt="Laura Gómez">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Laura Gómez</h5>
                        <small>Amante de la gastronomía</small>
                        <p class="mt-3">“Una experiencia increíble. Aprendí técnicas profesionales y descubrí nuevos sabores. ¡Cocinar es divertido y accesible!”</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="col-md-6 col-12">
                <div class="card testimonial-card text-center">
                    <img src="imagenes/persona4.jpg" class="testimonial-img mx-auto mb-3" alt="Diego Fernández">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Diego Fernández</h5>
                        <small>Emprendedor</small>
                        <p class="mt-3">“Los cursos son súper completos y bien organizados. Se entiende la parte práctica y la oportunidad de aprender desde cero. ¡Ahora cocino como un profesional!”</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="col-md-6 col-12">
                <div class="card testimonial-card text-center">
                    <img src="imagenes/persona2.jpg" class="testimonial-img mx-auto mb-3" alt="Mariana Ríos">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Mariana Ríos</h5>
                        <small>Arquitecta</small>
                        <p class="mt-3">“Una experiencia excepcional, con calidad y atención única en cada clase. Totalmente recomendado para quienes buscan lo mejor.”</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 4 -->
            <div class="col-md-6 col-12">
                <div class="card testimonial-card text-center">
                    <img src="imagenes/persona.jpg" class="testimonial-img mx-auto mb-3" alt="Carlos Méndez">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Carlos Méndez</h5>
                        <small>Senior Marketing Specialist</small>
                        <p class="mt-3">“Nunca pensé que podría hacer postres tan espectaculares. ¡El método es claro y aprendí desde la primera clase! ¡Recomiendo esta escuela al 100%!”</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<?= $this->endSection() ?>
