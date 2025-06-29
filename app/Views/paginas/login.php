<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/Home.css" />
</head>
<style> /* Estilo solo para errores*/
        .error {
    color: red ;
    font-size: 0.8rem ;
    display: block ;
    margin: 4px 0 8px 0;
}
</style>
<body class="no-footer"> <!-- Clase que quita espacio si no hay footer -->

    <!-- Navbar (fija arriba) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 navbar-lg fixed-top">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="imagenes/logo-sabor.jpg" height="50" class="me-2" />
            <span class="fs-4">S a b o r M a s t e r C l a s s</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav"></div>
    </nav>

    <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center login-container">

        <div class="row w-100">
            <!-- Formulario -->
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                <div class="card shadow w-75 p-4">
                    <div class="card-body">
                        <h1 class="mb-4 text-center">Iniciar Sesión</h1>
                        <form onsubmit="return validarFormulario()">
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo" required />
                                <span class="error" id="error-email"></span>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required>
                                    <span class="error" id="error-password"></span>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Ingresar</button>

                            <div class="mt-3 text-center">
                                <a href="<?= base_url('registro'); ?>" class="btn btn-outline-secondary me-2">¿No tienes cuenta? Regístrate</a>
                                <a href="<?= base_url('/'); ?>" class="btn btn-outline-primary">Volver al Home</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Imagen -->
            <div class="col-12 col-md-6 p-0 d-flex">
                <img src="<?= base_url('imagenes/pasta-794464_1280.jpg'); ?>" class="w-100 h-100 object-fit-cover" alt="Pasta">
            </div>
        </div>
    </div>

    <footer class="bg-dark text-center fixed-bottom">
        <div class="container d-flex justify-content-center gap-4 py-3">
            <i class="fab fa-whatsapp text-white fs-4"></i>
            <i class="fab fa-facebook text-white fs-4"></i>
            <i class="fab fa-x-twitter text-white fs-4"></i>
            <i class="fab fa-instagram text-white fs-4"></i>
            <i class="fab fa-youtube text-white fs-4"></i>
            <i class="fab fa-tiktok text-white fs-4"></i>
        </div>
    </footer>

    <!-- VALIDACIONES EN VIVO -->
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
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            return true;
        }

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


        document.getElementById("password").addEventListener("input", function() {
            const valor = this.value;
            const error = document.getElementById("error-password");
            const regex = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*.,?]).{8,15}$/;

            if (valor === "") {
                error.textContent = "";
            } else if (!regex.test(valor)) {
                error.textContent = "Debe tener 8-15 caracteres, 1 mayúscula, 1 número y 1 símbolo.";
            } else {
                error.textContent = "";
            }
        });
    </script>
</body>

</html>