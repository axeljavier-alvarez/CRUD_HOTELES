<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// VER DATOS
$routes->get('ver_clientes', 'ClientesController::index');


/* -------- RUTAS DE INSERTAR ------- */
// 1. Agregar
$routes->get('nuevo_cliente', 'ClientesController::nuevoCliente');
$routes->post('agregar_cliente', 'ClientesController::agregarCliente');






