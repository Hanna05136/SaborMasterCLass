<?= $this->extend('Plantilla/layout'); ?>
<?= $this->section('contenido'); ?>

<!-- ENCABEZADO DE LA PÁGINA -->
<head>
    <title>Sabor MasterClass - Panel de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="<?= base_url('Administrador.css') ?>" />
</head>

<!-- CONTENIDO DEL CUERPO -->
<main class="container-fluid admin-dashboard">
    <h2 class="mt-5 mb-4 text-center fw-bold text-dark-purple title">Panel de Administración</h2>

    <!-- TARJETAS DE RESUMEN -->
    <div class="row g-4 mb-5">
        <?php
            $resumen = [
                ['icon' => 'bi-people-fill', 'titulo' => 'Total Usuarios', 'valor' => '1,250'],
                ['icon' => 'bi-journal-check', 'titulo' => 'Cursos Activos', 'valor' => '35'],
                ['icon' => 'bi-person-badge-fill', 'titulo' => 'Tutores Registrados', 'valor' => '12'],
                ['icon' => 'bi-person-plus-fill', 'titulo' => 'Nuevas Inscripciones', 'valor' => '87'],
            ];
            foreach ($resumen as $item):
        ?>
            <div class="col-md-3">
                <div class="card summary-card p-3 text-center">
                    <i class="bi <?= $item['icon'] ?> display-4 text-purple mb-2"></i>
                    <h5 class="card-title fw-bold"><?= $item['titulo'] ?></h5>
                    <p class="card-text fs-3"><?= $item['valor'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- GESTIÓN DE USUARIOS -->
    <div class="card p-4 mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold text-dark-purple">Gestión de Usuarios</h4>
            <div class="d-flex gap-2">
                <a href="<?= base_url('persona/crear') ?>" class="btn btn-success">Añadir Usuario</a>
                <a href="<?= base_url('persona/exportarExcel') ?>" class="btn btn-success">Exportar en Excel</a>
            </div>
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Buscar usuario por nombre o email...">
            <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
        </div>

        <div class="table-responsive">
            <table class="table table-hover user-table">
                <thead>
                    <tr>
                        <th>Documento</th>
                        <th>Tipo Documento</th>
                        <th>Género</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($personas as $per): ?>
                        <tr>
                            <td><?= $per['No_Documento']; ?></td>
                            <td><?= $per['Tipo_Documento']; ?></td>
                            <td><?= $per['Genero']; ?></td>
                            <td><?= $per['Nombre_Persona']; ?></td>
                            <td><?= $per['Email_Persona']; ?></td>
                            <td><?= $per['Direccion_Persona']; ?></td>
                            <td><?= $per['Telefono_Persona']; ?></td>
                            <td>
                                <a href="<?= base_url('/persona/editar/' . $per['No_Documento']) ?>" class="btn btn-warning">Editar</a>
                                <a href="<?= base_url('/persona/eliminar/' . $per['idPersona']) ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- GESTIÓN DE CURSOS -->
    <div class="card p-4 mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold text-dark-purple">Gestión de Cursos</h4>
            <a href="<?= base_url('persona/CrearCurso') ?>" class="btn btn-success">Añadir Curso</a>
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Buscar curso por título o tutor...">
            <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
        </div>

        <div class="table-responsive">
            <table class="table table-hover course-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Duración</th>
                        <th>Número Curso</th>
                        <th>Nombre</th>
                        <th>Detalle</th>
                        <th>Costo</th>
                        <th>Nivel de Aprendizaje</th>
                        <th>Categoría</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cursos as $curso): ?>
                        <tr>
                            <td><?= $curso['idCurso']; ?></td>
                            <td><?= $curso['Duracion']; ?></td>
                            <td><?= $curso['Numero_Curso']; ?></td>
                            <td><?= $curso['Nombre']; ?></td>
                            <td><?= $curso['Detalle']; ?></td>
                            <td><?= $curso['Costo']; ?></td>
                            <td><?= $curso['Nivel_Aprendizaje']; ?></td>
                            <td><?= $curso['Categoria_idCategoria']; ?></td>
                            <td>
                                <a href="<?= base_url('/persona/EditarCurso/' . $curso['idCurso']) ?>" class="btn btn-warning">Editar</a>
                                <a href="<?= base_url('/persona/eliminarCurso/' . $curso['idCurso']) ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?= $this->endSection(); ?>
