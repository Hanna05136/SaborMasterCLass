<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel de Usuario - Cursos de Cocina</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Cursos Cocina</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="perfil.php">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Cerrar Sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h2>Bienvenido/a, <?php echo htmlspecialchars($usuario); ?> 👩‍🍳</h2>
    <p class="lead">Aquí puedes ver tus cursos disponibles y gestionar tu cuenta.</p>

    <div class="row mt-4">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Ver Cursos Disponibles</h5>
            <p class="card-text">Consulta todos los cursos de cocina activos e inscríbete.</p>
            <a href="cursos.php" class="btn btn-primary">Ver Cursos</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 mt-3 mt-md-0">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Mis Cursos</h5>
            <p class="card-text">Accede a los cursos en los que estás inscrito/a actualmente.</p>
            <a href="mis_cursos.php" class="btn btn-success">Ver Mis Cursos</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>