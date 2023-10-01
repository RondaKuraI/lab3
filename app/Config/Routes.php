<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/ecommerce', 'Home::ecommerce');
$routes->get('crudproduct', 'Home::crudproduct');
