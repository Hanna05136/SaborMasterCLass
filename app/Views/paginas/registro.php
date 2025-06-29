<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <a href="/css/registro.css"></a>
</head>

<style>
  .error {
    color: red;
    font-size: 0.8rem;
    margin: 4px 0 8px 0;
    display: block;
  }
</style>

<body>
  <div class="container-fluid vh-100">
    <div class="row h-100">
      <!-- Sección del Formulario -->
      <div class="col-md-6 d-flex align-items-center justify-content-center">
        <div class="card shadow w-75 p-4">
          <div class="card-body">
            <h1 class="mb-4 text-center">Regístrate</h1>
            <form onsubmit="return validarFormulario()">
              <div class="mb-3">
                <input type="text" class="form-control" id="nombres" placeholder="Digite su nombre" required
                  maxlength="30" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras" required />
                <span class="error" id="error-nombres"></span>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" id="correo" placeholder="Ingrese la dirección de correo" required>
                <span class="error" id="error-correo"></span>
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" id="password" placeholder="Contraseña" required maxlength=10
                  pattern="(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*.,?]).{8,10}"
                  title=" Debe tener entre 8 y 10 caracteres, incluir una mayúscula, un número y un símbolo" required />
                <i class="fa fa-eye toggle-password" onclick="mostrarContrasena('password', this)"></i>
                <span class="error" id="error-password"></span>
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" id="confirmar" placeholder="Confirme su contraseña" required
                  title="Debe coincidir con la contraseña anterior" required />
                <i class="fa fa-eye toggle-password" onclick="mostrarContrasena('confirmar', this)"></i>
                <span class="error" id="error-confirmar"></span>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="terminos" />
                <label class="form-check-label" for="terminos">
                  Acepto términos y condiciones
                </label>
                <span class="error" id="error-terminos"></span>
              </div>

              <button type="submit" class="btn btn-dark w-100">Crear Cuenta</button>
              <div class="mt-3 text-center">
                <a href="<?php echo base_url('/login'); ?>" class="btn btn-outline-secondary me-2">Volver al Login</a>
                <a href="<?= base_url('/'); ?>" class="btn btn-outline-primary">Volver al Home</a>
              </div>
            </form>
          </div>
        </div>
      </div>


      <!-- Sección de Imagen -->
      <div class="col-md-6 image-section d-none d-md-block">
        <img src="imagenes/pasta-794464_1280.jpg">
      </div>
    </div>
  </div>

  <script>
    function mostrarContrasena(id, icon) {
      const campo = document.getElementById(id);
      if (campo.type === "password") {
        campo.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
      } else {
        campo.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
      }
    }

    function validarFormulario() {
      const password = document.getElementById("password").value;
      const confirmPassword = document.getElementById("confirmar").value;
      const terminos = document.getElementById("terminos");
      let valido = true;

      // Validar confirmación de contraseña
      if (password !== confirmPassword) {
        document.getElementById("error-confirmar").textContent = "Las contraseñas no coinciden.";
        valido = false;
      } else {
        document.getElementById("error-confirmar").textContent = "";
      }

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

    // Validación en vivo para correo electrónico
    document.getElementById("correo").addEventListener("blur", function() {
      const valor = this.value.trim();
      const error = document.getElementById("error-correo");

      const dominiosPermitidos = ["gmail.com", "hotmail.com", "outlook.com", "yahoo.com", "adoptarte.org", "sena.edu.co"];
      const partes = valor.split("@");

      if (partes.length === 2 && dominiosPermitidos.includes(partes[1].toLowerCase())) {
        error.textContent = "";
      } else {
        error.textContent = "Correo inválido. Solo se permiten dominios autorizados.";
      }
    });

    // Validación en vivo para contraseña
    document.getElementById("password").addEventListener("input", function() {
      const valor = this.value;
      const error = document.getElementById("error-password");
      const regex = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*.,?]).{8,10}$/;

      if (valor === "") {
        error.textContent = "";
      } else if (!regex.test(valor)) {
        error.textContent = "Debe tener 8-10 caracteres, 1 mayúscula, 1 número y 1 símbolo.";
      } else {
        error.textContent = "";
      }

      // Revalidar confirmar contraseña si ya está escrita
      const confirmar = document.getElementById("confirmar").value;
      const errorConfirmar = document.getElementById("error-confirmar");
      if (confirmar !== "" && confirmar !== valor) {
        errorConfirmar.textContent = "Las contraseñas no coinciden.";
      } else {
        errorConfirmar.textContent = "";
      }
    });

    // Validación en vivo para confirmar contraseña
    document.getElementById("confirmar").addEventListener("input", function() {
      const password = document.getElementById("password").value;
      const confirmar = this.value;
      const error = document.getElementById("error-confirmar");

      if (confirmar === "") {
        error.textContent = "";
      } else if (confirmar !== password) {
        error.textContent = "Las contraseñas no coinciden.";
      } else {
        error.textContent = "";
      }
    });

    // Validación en vivo para términos y condiciones
    document.getElementById("terminos").addEventListener("change", function () {
  const error = document.getElementById("error-terminos");
  if (this.checked) {
    error.textContent = "";
  }
});
  </script>

</body>

</html>