<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home/salam', 'Home::salam');
$routes->get('/home/prodi/(:any)/(:any)', 'Home::prodi/$1/$2');
