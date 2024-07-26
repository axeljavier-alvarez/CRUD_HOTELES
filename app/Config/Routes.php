<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/* -------- RUTAS DE VER ------- */
$routes->get('/', 'Home::index');
$routes->get('ver_clientes', 'ClientesController::index');
$routes->get('ver_hoteles', 'HotelesController::index');
$routes->get('ver_reservaciones', 'ReservacionesController::index');

/* -------- RUTAS DE INSERTAR ------- */
// 1. Agregar Cliente
// $routes->get('nuevo_cliente', 'ClientesController::nuevoCliente');
$routes->post('agregar_cliente', 'ClientesController::agregarCliente');
// 2. Agregar Hotel
$routes->post('agregar_hotel', 'HotelesController::agregarHotel');
// 3. Agregar Reservacion
$routes->post('agregar_reservacion', 'ReservacionesController::agregarReservacion');

/* -------- RUTAS DE ELIMINAR ------- */

// 1. Eliminar Cliente
$routes->get('eliminar_cliente/(:num)','ClientesController::eliminarCliente/$1');
// 2. Eliminar Hotel
$routes->get('eliminar_hotel/(:num)','HotelesController::eliminarHotel/$1');
// 3. Eliminar Reservacion
$routes->get('eliminar_reservacion/(:num)','ReservacionesController::eliminarReservacion/$1');








