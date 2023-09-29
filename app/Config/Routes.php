<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProductsController::index');
$routes->get('register', 'MainController::register');
$routes->post('registration', 'MainController::registration');
$routes->get('login', 'MainController::login');
$routes->post('loginAuth', 'MainController::loginAuth');
$routes->get('logout', 'MainController::logout');
$routes->get('viewProducts/(:any)', 'ProductsController::viewProducts/$1', ['filter' => 'authGuard']);
$routes->get('product', 'ProductsController::products', ['filter' => 'authGuard']);