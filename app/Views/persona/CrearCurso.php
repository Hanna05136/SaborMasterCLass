<?php echo $this->extend('Plantilla/layout'); ?>
<?php echo $this->section('contenido'); ?>
<link rel="stylesheet" href="<?= base_url('estilos/editar.css') ?>">

<form method="post" action="<?= base_url('persona/guardarCurso'); ?>" enctype="multipart/form-data" class="form-editar" novalidate>
    <div class="card card-editar">
        <div class="card-header">Registrar Curso</div>
        <div class="card-body">
            <h5 class="card-title subtitulo">Ingresar todos los datos</h5>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>ID CURSO</label>
                        <input class="form-control" type="number" name="idCurso" id="idCurso" maxlength="15">
                        <span class="text-danger" id="error-cedula"></span>
                    </div>

                    <div class="form-group">
                        <label>DURACION</label>
                        <input class="form-control" type="text" name="Duracion" id="Duracion" maxlength="20">
                        <span class="text-danger" id="error-genero"></span>
                    </div>

                    <div class="form-group">
                        <label>NUMERO CURSO</label>
                        <input class="form-control" type="number" name="Numero_Curso" id="Numero_Curso" maxlength="20">
                        <span class="text-danger" id="error-genero"></span>
                    </div>

                    <div class="form-group">
                        <label>NOMBRE</label>
                        <input class="form-control" type="text" name="Nombre" id="Nombre" maxlength="20">
                        <span class="text-danger" id="error-nombre"></span>
                    </div>

                    <div class="form-group">
                        <label>DETALLE</label>
                        <input class="form-control" type="text" name="Detalle" id="Detalle">
                        <span class="text-danger" id="error-telefono"></span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>COSTO</label>
                        <input class="form-control" type="number" name="Costo" id="Costo">
                        <span class="text-danger" id="error-email"></span>
                    </div>

                    <div class="form-group">
                        <label>NIVEL DE APRENDIZAJE</label>
                        <input class="form-control" type="text" name="Nivel_Aprendizaje" id="Nivel_Aprendizaje">
                    </div>

                    <div class="form-group">
                        <label>CATEGORIA</label>
                        <input class="form-control" type="text" name="Categoria_idCategoria" id="Categoria_idCategoria">
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