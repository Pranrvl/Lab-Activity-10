<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home/salam', 'Home::salam');
$routes->get('/home/prodi/(:any)/(:any)', 'Home::prodi/$1/$2');

// ── Registrasi (Form Validation) ──────────────────────────
$routes->get('/registrasi/', 'Registrasi::newAccount');
$routes->post('/registrasi/', 'Registrasi::newAccount');

// ── User / Login (Session) ────────────────────────────────
$routes->get('/User', 'User::index');
$routes->post('/User/doLogin', 'User::doLogin');
$routes->get('/User/logout', 'User::logout');

// ── Dashboard (Dilindungi Filter Auth) ───────────────────
$routes->get('/dashboard', 'User::dashboard', ['filter' => 'auth']);
