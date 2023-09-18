<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/','ProductController::index');
$routes->get('products/create','ProductController::create');
$routes->post('products/store','ProductController::store');
$routes->get('products/edit/(:any)','ProductController::edit/$1');
$routes->post('products/update/(:any)','ProductController::update/$1');
$routes->get('products/delete/(:any)','ProductController::delete/$1');





