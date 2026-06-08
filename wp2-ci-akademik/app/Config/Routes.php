<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/registrasi/', 'Registrasi::new_account');
$routes->post('/registrasi/', 'Registrasi::new_account');
