<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tanrilar', 'Tanrilar::index');
$routes->get('/mitoloji', 'Mitoloji::index');

// app/Config/Routes.php
$routes->get('login', 'LoginController::index'); // Login sayfası
$routes->post('login/authenticate', 'LoginController::authenticate'); // Giriş yapma işlemi
$routes->get('/dashboard', 'DashboardController::index'); // GET isteği ile dashboard sayfası
$routes->post('/dashboard', 'DashboardController::index');


