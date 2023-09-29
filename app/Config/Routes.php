<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProductsController::index');
$routes->get('viewProducts/(:any)', 'ProductsController::viewProducts/$1');
$routes->get('product', 'ProductsController::products');