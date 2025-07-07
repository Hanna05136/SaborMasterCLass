<?=$this ->extend('Plantilla/layout1') ?>
<?=$this ->section('contenido') ?>

<div class="container mt-5">
  <h2>Bienvenido/a, <?php //echo htmlspecialchars($usuario); 
                    ?> 👩‍🍳</h2>
  <p class="lead">Aquí puedes ver tus cursos disponibles y gestionar tu cuenta.</p>

  <div class="row mt-4">
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Ver Cursos Disponibles</h5>
          <p class="card-text">Consulta todos los cursos de cocina activos e inscríbete.</p>
          <a href=<?php echo base_url('/Cursos'); ?> class="btn btn-primary">Ver Cursos Disponibles</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 mt-3 mt-md-0">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Mis Cursos</h5>
          <p class="card-text">Accede a los cursos en los que estás inscrito/a actualmente.</p>
          <a href=<?php echo base_url('paginas/MisCursos'); ?>  class="btn btn-success">Ver Mis Cursos</a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<?=$this ->endSection() ?>
