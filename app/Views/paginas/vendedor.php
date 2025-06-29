<?php echo $this->extend('plantilla/layout'); ?>
<?php echo $this->section('contenido');?>
<h2>Bienvenid@, Vendedor/a</h2>
<p>Esta es tu pagina de inicio</p>
<br>
<a href="<?= base_url('/logout');?>" class="btn btn-danger float-end">Cerrar sesion</a>

<?php echo $this->endSection(); ?>