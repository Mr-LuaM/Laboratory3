<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'UserController::index');
$routes->get('admin', 'AdminController::index', ['filter' => 'adminFilter']);
$routes->get('register', 'MainController::register');
$routes->post('registration', 'MainController::registration');
$routes->get('login', 'MainController::login');
$routes->post('loginAuth', 'MainController::loginAuth');
$routes->get('logout', 'MainController::logout');
$routes->get('viewProducts/(:any)', 'UserController::viewProducts/$1', ['filter' => 'authGuard']);
$routes->get('product', 'UserController::product', ['filter' => 'authGuard']);
$routes->get('about', 'UserController::about', ['filter' => 'authGuard']);
$routes->get('manageProduct', 'AdminController::manageProduct', ['filter' => 'adminFilter']);
$routes->get('manageUser', 'AdminController::manageUser', ['filter' => 'adminFilter']);
$routes->get('delete_product/(:any)', 'AdminController::delete/$1', ['filter' => 'adminFilter']);
$routes->post('addproducts', 'AdminController::addproduct', ['filter' => 'adminFilter']);
$routes->post('edituserrole', 'AdminController::editUserRole', ['filter' => 'adminFilter']);
$routes->get('delete_user/(:any)', 'AdminController::delete_user/$1', ['filter' => 'adminFilter']);