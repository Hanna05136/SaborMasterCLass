<?php echo $this->extend('Plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>
<link rel="stylesheet" href="<?= base_url('estilos/editar.css') ?>">

<form method="post" action="<?= base_url('personas/actualizar/' . $personas['No_Documento']); ?>" class="form-editar" novalidate>
    <div class="card card-editar">
        <div class="card-header">Editar usuario</div>
        <div class="card-body">
            <h5 class="card-title subtitulo">Ingresar todos los datos</h5>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Cédula</label>
                        <input class="form-control" type="text" name="No_Documento" value="<?= esc($personas['No_Documento']) ?>" readonly title="No puedes modificar la CC del usuario">
                    </div>

                    <div class="form-group">
                        <label>Nombre</label>
                        <input class="form-control" type="text" name="Nombre_Persona" id="nombre_emp" value="<?= esc($personas['Nombre_Persona']) ?>" maxlength="20">
                        <span class="text-danger" id="error-nombre"></span>
                    </div>

                    <div class="form-group">
                        <label>Genero</label>
                        <input class="form-control" type="text" name="Genero" id="genero" value="<?= esc($personas['Genero']) ?>" maxlength="20">
                        <span class="text-danger" id="error-genero"></span>
                    </div>

                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="text" name="Email_Persona" id="email_emp" value="<?= esc($personas['Email_Persona']) ?>">
                        <span class="text-danger" id="error-email"></span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input class="form-control" type="text" name="Telefono_Persona" id="telefono_emp" value="<?= esc($personas['Telefono_Persona']) ?>" maxlength="10">
                        <span class="text-danger" id="error-telefono"></span>
                    </div>

                    <div class="form-group">
                        <label>Dirección</label>
                        <input class="form-control" type="text" name="Direccion_Persona" value="<?= esc($personas['Direccion_Persona']) ?>">
                    </div>

                    <div class="form-group">
                        <label>Rol</label>
                        <select class="form-control" name="idRol">
                            <option value="1" <?= $personas['idRol'] == 1 ? 'selected' : '' ?>>Administrador</option>
                            <option value="2" <?= $personas['idRol'] == 2 ? 'selected' : '' ?>>Estudiante</option>
                            <option value="3" <?= $personas['idRol'] == 3 ? 'selected' : '' ?>>Tutor</option>
                            <option value="4" <?= $personas['idRol'] == 4 ? 'selected' : '' ?>>Proveedor</option>
                        </select>
                    </div>

                </div>
            </div>

            <div class="form-group text-center mt-4">
                <input class="btn btn-success btn-editar" type="submit" value="Aceptar y volver">
            </div>
        </div>
    </div>
</form>

<!-- Validación en vivo -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dominiosPermitidos = ["gmail.com", "hotmail.com", "outlook.com", "yahoo.com", "sena.edu.co"];

        const nombre = document.getElementById('nombre_emp');
        const apellido = document.getElementById('apellido_emp');
        const email = document.getElementById('email_emp');
        const telefono = document.getElementById('telefono_emp');

        const errorNombre = document.getElementById('error-nombre');
        const errorApellido = document.getElementById('error-apellido');
        const errorEmail = document.getElementById('error-email');
        const errorTelefono = document.getElementById('error-telefono');

        function validarNombre() {
            const valor = nombre.value.trim();
            if (!/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]{1,20}$/.test(valor)) {
                errorNombre.textContent = "Nombre inválido: solo letras y máximo 20 caracteres.";
                return false;
            }
            errorNombre.textContent = "";
            return true;
        }

        function validarApellido() {
            const valor = apellido.value.trim();
            if (!/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]{1,20}$/.test(valor)) {
                errorApellido.textContent = "Apellido inválido: solo letras y máximo 20 caracteres.";
                return false;
            }
            errorApellido.textContent = "";
            return true;
        }

        function validarEmail() {
            const valor = email.value.trim();
            const partes = valor.split('@');
            if (partes.length !== 2 || !dominiosPermitidos.includes(partes[1])) {
                errorEmail.textContent = "Correo inválido o dominio no permitido.";
                return false;
            }
            errorEmail.textContent = "";
            return true;
        }

        function validarTelefono() {
            const valor = telefono.value.trim();
            if (!/^\d{7,10}$/.test(valor)) {
                errorTelefono.textContent = "Teléfono inválido: solo números, entre 7 y 10 dígitos.";
                return false;
            }
            errorTelefono.textContent = "";
            return true;
        }

        nombre.addEventListener('input', validarNombre);
        apellido.addEventListener('input', validarApellido);
        email.addEventListener('input', validarEmail);
        telefono.addEventListener('input', validarTelefono);

        document.querySelector('.form-editar').addEventListener('submit', function(e) {
            if (!validarNombre() || !validarApellido() || !validarEmail() || !validarTelefono()) {
                e.preventDefault();
            }
        });
    });
</script>

<?php echo $this->endSection(); ?>