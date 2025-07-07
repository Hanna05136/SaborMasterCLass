    <?php

    use CodeIgniter\Router\RouteCollection;

    /**
     * @var RouteCollection $routes
     */
    $routes->get('/', 'Home::index');
    $routes->get('/login', 'Login::index');
    $routes->get('/registro', 'Registro::index');
    $routes->get('/Nosotros', 'Nosotros::index');
    $routes->get('/Cursos', 'Cursos::index');
    $routes->get('/Tutores', 'Tutores::index');
    $routes->get('/Contacto', 'Contacto::index');
    $routes->get('/Estudiante', 'Estudiante::estudiante');
    $routes->get('paginas/MisCursos', 'Estudiante::index');
    $routes->get('/VerCurso', 'VerCurso::index');
    $routes->post('/login/acceder','Login::acceder');
    $routes->get('/logout', 'Login::salir');
    $routes->get('/administrador', 'Administrador::index');
    $routes->get('/persona/crear', 'Administrador::crear');
    $routes->post('/persona/guardar', 'Administrador::guardar');
    $routes->get('/persona/editar/(:num)', 'Administrador::editar/$1');
    $routes->get('/persona/EditarCurso/(:num)', 'Administrador::editarCurso/$1');
    $routes->post('/personas/actualizar/(:any)', 'Administrador::actualizar/$1');
    $routes->post('/personas/actualizarCurso/(:any)', 'Administrador::actualizarCurso/$1');
    $routes->get('/persona/eliminar/(:num)', 'Administrador::eliminar/$1');
    $routes->get('/persona/eliminarCurso/(:num)', 'Administrador::eliminarCurso/$1');
    $routes->post('/persona/guardarCurso', 'Administrador::guardarCurso');
    $routes->get('/persona/CrearCurso', 'Administrador::crearCurso');
    $routes->get('/persona/exportarExcel', 'Administrador::exportarExcel');



