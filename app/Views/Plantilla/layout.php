<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sabor MasterClass</title>

  <!-- Bootstrap + FontAwesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= base_url('css/Home.css') ?>">

</head>

<body>

  <!-- Navbar (fija arriba) -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 navbar-lg fixed-top">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="imagenes/logo-sabor.jpg" height="50" class="me-2" />
      <span class="fs-4">S a b o r M a s t e r C l a s s</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav me-3">
        <li class="nav-item"><a href=<?php echo base_url('/'); ?> class="nav-link">Inicio</a></li>
        <li class="nav-item"><a href=<?php echo base_url('/Nosotros'); ?> class="nav-link">Nosotros</a></li>
        <li class="nav-item"><a href=<?php echo base_url('/Cursos'); ?> class="nav-link">Más cursos</a></li>
        <li class="nav-item"><a href=<?php echo base_url('/Tutores'); ?> class="nav-link">Nuestros Tutores</a></li>
        <li class="nav-item"><a href=<?php echo base_url('/Contacto'); ?> class="nav-link">Contacto</a></li>
      </ul>
      <a href=<?php echo base_url('/login'); ?> class="btn btn-outline-light me-2">LOGIN</a>
      <a href=<?php echo base_url('/registro'); ?> class="btn btn-light">REGISTRO</a>
    </div>
  </nav>

    <!-- Contenido principal -->
    <?= $this->renderSection('contenido') ?>

    <!-- Footer fijo abajo -->
  <footer class="bg-dark text-center fixed-bottom">
    <div class="container d-flex justify-content-center gap-4 py-3">
      <i class="fab fa-whatsapp text-white fs-4"></i>
      <i class="fab fa-facebook text-white fs-4"></i>
      <i class="fab fa-x-twitter text-white fs-4"></i>
      <i class="fab fa-instagram text-white fs-4"></i>
      <i class="fab fa-youtube text-white fs-4"></i>
      <i class="fab fa-tiktok text-white fs-4"></i>
      <br>
      <p style="color: white;"> SaborMasterClass. Todos los derechos reservados. Desarrollado por HAMN</p>

    </div>
  </footer>
</body>

</html>