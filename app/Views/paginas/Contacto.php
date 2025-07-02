<?= $this->extend('Plantilla/layout') ?>
<?= $this->section('contenido') ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/Contacto.css" />
</head>
  <!-- SECCIÓN DE CONTACTO -->
  <div class="contact-page-wrapper">
    <div class="contact-container">
      <div class="row g-4 justify-content-center my-5">

        <!-- CARD: FORMULARIO -->
        <div class="col-lg-7 col-12">
          <div class="card card-form">
            <div class="card-body">
              <h3 class="mb-3 fw-bold">Contacto</h3>
              <p class="text-muted">¿Tienes preguntas? ¡Envíanos un mensaje!</p>
              <form onsubmit="return validarFormulario()">
                <div class="row mb-3">
                  <div class="col">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombres" placeholder="Nombre" required maxlength="30" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras" />
                    <span class="error" id="error-nombres"></span>
                  </div>
                  <div class="col">
                    <label class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellidos" placeholder="Apellido" required maxlength="30" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras" />
                    <span class="error" id="error-apellidos"></span>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Correo electrónico" required />
                    <span class="error" id="error-email"></span>
                  </div>
                  <div class="col">
                    <label class="form-label">Número de contacto</label>
                    <input type="text" class="form-control" id="numero" placeholder="Teléfono" required maxlength="10" pattern="\d{1,10}" title="Debe ingresar solo números (máximo 10 dígitos)" />
                    <span class="error" id="error-telefono"></span>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Selecciona un tema frecuente</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tema" id="certificados" checked />
                    <label class="form-check-label" for="certificados">Certificados</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tema" id="cursos" />
                    <label class="form-check-label" for="cursos">Cursos</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tema" id="soporte" />
                    <label class="form-check-label" for="soporte">Soporte</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tema" id="disponibilidad" />
                    <label class="form-check-label" for="disponibilidad">Disponibilidad</label>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Mensaje</label>
                  <input type="text" class="form-control" id="mensaje" placeholder="Escribe aquí tu mensaje" required />
                  <span class="error" id="error-mensaje"></span>
                </div>
                <button type="submit" class="btn btn-custom px-4">Enviar mensaje</button>
              </form>
            </div>
          </div>
        </div>

        <!-- CARD: INFORMACIÓN DE CONTACTO -->
        <div class="col-lg-5 col-12">
          <div class="card contact-info-card">
            <div class="card-body">
              <h4 class="fw-bold mb-3">Información de Contacto</h4>
              <p>Envíanos tus comentarios</p>
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-telephone-fill me-2"></i> +310 245 32XX</li>
                <li class="mb-2"><i class="bi bi-envelope-fill me-2"></i> SaborMasterClass@gmail.com</li>
                <li><i class="bi bi-geo-alt-fill me-2"></i> 308 Negra Arroyo Lane, Albuquerque, New Mexico</li>
              </ul>
              <div class="mt-4">
                <a href="#"><i class="bi bi-twitter me-3"></i></a>
                <a href="#"><i class="bi bi-instagram me-3"></i></a>
                <a href="#"><i class="bi bi-discord"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script>
    
    function validarFormulario() {
      const password = document.getElementById("password").value;
      const confirmPassword = document.getElementById("confirmar").value;
      let valido = true;

      // Validar términos y condiciones
      if (!terminos.checked) {
        document.getElementById("error-terminos").textContent = "Acepta los términos.";
        valido = false;
      } else {
        document.getElementById("error-terminos").textContent = "";
      }

      return valido;
    }

    // Validación en vivo para nombres
    document.getElementById("nombres").addEventListener("input", function() {
      const valor = this.value;
      const error = document.getElementById("error-nombres");
      const regex = /^[A-Za-zÁÉÍÓÚáéíóúñÑ\s]*$/;
      error.textContent = regex.test(valor) ? "" : "Solo se permiten letras y espacios.";
    });

    // Validación en vivo para apellidos
    document.getElementById("apellidos").addEventListener("input", function() {
      const valor = this.value;
      const error = document.getElementById("error-apellidos");
      const regex = /^[A-Za-zÁÉÍÓÚáéíóúñÑ\s]*$/;
      error.textContent = regex.test(valor) ? "" : "Solo se permiten letras y espacios.";
    });

    // Validaciones en vivo      
        document.getElementById("email").addEventListener("blur", function() {
            const valor = this.value.trim();
            const error = document.getElementById("error-email");
            // Extraer dominio del email
            const partes = valor.split("@");

            if (partes.length === 2) {
                error.textContent = "";
            } else {
                error.textContent = "Correo inválido. Debe usar @";
            }
        });

        document.getElementById("Telefono").addEventListener("submit", function(event) {
      const input = document.getElementById("numero").value;
      const mensaje = document.getElementById("mensaje");

      // Validar si el input contiene solo dígitos
      if (!/^\d{1,10}$/.test(input)) {
        event.preventDefault();
        mensaje.textContent = "Debe ingresar solo números (máximo 10 dígitos).";
      } else {
        mensaje.textContent = "";
      }
    });
// Validacion en vivo para el mensaje
        document.getElementById("mensaje").addEventListener("input", function() {
            const valor = this.value;
            const error = document.getElementById("error-mensaje");
            error.textContent = valor.length > 0 ? "" : "El mensaje no puede estar vacío.";
        });
  </script>


<?= $this->endSection() ?>
