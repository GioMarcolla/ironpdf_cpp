<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home route
$routes->get('/', 'Home::index');

// Newsletter signup route
$routes->post('newsletter/signup', 'Newsletter::signup');
