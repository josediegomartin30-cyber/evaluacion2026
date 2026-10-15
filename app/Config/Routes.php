<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('integrantes','IntegrantesController::index');
$routes->post('agregar_integrantes','IntegrantesController::insertar');
$routes->get('eliminar_integrantes/(:num)','IntegrantesController::eliminar/$1');
$routes->get('buscar_integrantes/(:num)','IntegrantesController::buscar/$1');
$routes->post('modificar_integrantes','IntegrantesController::modificar');
