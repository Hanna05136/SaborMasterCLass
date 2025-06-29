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
