<?= $this->extend('Plantilla/layout1') ?>
<?= $this->section('contenido') ?>

<body>
    <h1>Estudiantes con Curso y Categoría</h1>
    <table class="table table-striped" border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Curso</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($estudiantes as $est) : ?>
            <tr>
                <td><?= $est->idEstudiante ?></td>
                <td><?= $est->Nombre_Persona ?></td>
                <td><?= $est->Categoria ?></td>
                <td><?= $est->Curso ?></td>
                <td>
                    <a href="<?= base_url('/VerCurso') ?>" class="btn btn-primary">Ver Curso</a>
                    
            </tr>
        <?php endforeach; ?>
    </table>
</body>

<?= $this->endSection() ?>
