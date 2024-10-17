<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'StudyMaterialsController::home'); // Halaman Home
$routes->get('about', 'StudyMaterialsController::about'); // Halaman About
$routes->get('study_materials', 'StudyMaterialsController::index');
$routes->get('study_materials/view/(:num)', 'StudyMaterialsController::view/$1');

