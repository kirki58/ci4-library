<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get("AdminHome", 'Home::adminHome');
$routes->post('validation/validate_admin', 'read_forms::read_admin');
