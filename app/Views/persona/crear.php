<?php echo $this->extend('Plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>
<link rel="stylesheet" href="<?= base_url('estilos/editar.css') ?>">

<form method="post" action="<?= base_url('persona/guardar'); ?>" enctype="multipart/form-data" class="form-editar" novalidate>
    <div class="card card-editar">
        <div class="card-header">Registrar Usuario</div>
        <div class="card-body">
            <h5 class="card-title subtitulo">Ingresar todos los datos</h5>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Documento</label>
                        <input class="form-control" type="text" name="No_Documento" id="No_Documento" maxlength="15">
                        <span class="text-danger" id="error-cedula"></span>
                    </div>

                    <div class="form-group">
                        <label>Tipo Documento</label>
                        <select class="form-control" name="Tipo_Documento" id="Tipo_Documento">
                            <option value="CC">Cédula de Ciudadanía</option>
                            <option value="TI">Tarjeta de Identidad</option>
                            <option value="CE">Cédula de Extranjería</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Genero</label>
                        <input class="form-control" type="text" name="Genero" id="Genero" maxlength="20">
                        <span class="text-danger" id="error-genero"></span>
                    </div>

                    <div class="form-group">
                        <label>Nombre</label>
                        <input class="form-control" type="text" name="Nombre_Persona" id="Nombre_Persona" maxlength="20">
                        <span class="text-danger" id="error-nombre"></span>
                    </div>

                    <div class="form-group">
                        <label>Teléfono</label>
                        <input class="form-control" type="text" name="Telefono_Persona" id="Telefono_Persona" maxlength="10">
                        <span class="text-danger" id="error-telefono"></span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="text" name="Email_Persona" id="Email_Persona">
                        <span class="text-danger" id="error-email"></span>
                    </div>

                    <div class="form-group">
                        <label>Dirección</label>
                        <input class="form-control" type="text" name="Direccion_Persona" id="Direccion_Persona">
                    </div>

                    <div class="form-group text-center mt-4">
                        <input class="btn btn-success btn-editar" type="submit" value="Registrar">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Validación en vivo -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dominiosPermitidos = ["gmail.com", "hotmail.com", "outlook.com", "yahoo.com", "sena.edu.co"];
        const cedula = document.getElementById('DOCUMENTO_USUARIO');
        const errorCedula = document.getElementById('error-cedula');
        const nombre = document.getElementById('NOMBRE_USUARIO');
        const apellido = document.getElementById('APELLIDO_USUARIO');
        const email = document.getElementById('EMAIL_USUARIO');
        const telefono = document.getElementById('TELEFONO_USUARIO');

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

        function validarCedula() {
            const valor = cedula.value.trim();
            if (!/^\d{5,15}$/.test(valor)) {
                errorCedula.textContent = "Cédula inválida: solo números, entre 5 y 15 dígitos.";
                return false;
            }
            errorCedula.textContent = "";
            return true;
        }

        // Eventos en vivo
        cedula.addEventListener('input', validarCedula);

        // Validación final al enviar
        document.querySelector('.form-editar').addEventListener('submit', function(e) {
            if (
                !validarCedula() ||
                !validarNombre() ||
                !validarApellido() ||
                !validarEmail() ||
                !validarTelefono()
            ) {
                e.preventDefault();
            }
        });

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

        // Eventos en vivo
        nombre.addEventListener('input', validarNombre);
        apellido.addEventListener('input', validarApellido);
        email.addEventListener('input', validarEmail);
        telefono.addEventListener('input', validarTelefono);

        // Validación final al enviar
        document.querySelector('.form-editar').addEventListener('submit', function(e) {
            if (!validarNombre() || !validarApellido() || !validarEmail() || !validarTelefono()) {
                e.preventDefault();
            }
        });
    });
</script>

<?php echo $this->endSection(); ?>