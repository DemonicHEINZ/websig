<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');

$routes->group('kecamatan', function ($routes) {
    $routes->get('kecamatan', 'kecamatan::index');
    $routes->get('kecamatan/create', 'kecamatan::create');
    $routes->post('kecamatan/store', 'kecamatan::store');
    $routes->get('kecamatan/edit/(:segment)', 'kecamatan::edit/$1');
    $routes->post('kecamatan/update/(:segment)', 'kecamatan::update/$1');
    $routes->get('kecamatan/delete/(:segment)', 'kecamatan::delete/$1');
});
