<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('SiteController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'SiteController::index');
$routes->get('assignment', 'AssignmentController::index');
$routes->get('assignment/create', 'AssignmentController::create');

$routes->get('bonus', 'BonusController::index');
$routes->get('contract', 'ContractController::index');
$routes->get('dismiss', 'DismissController::index');

$routes->get('employee', 'EmployeeController::index');
$routes->get('employee/create', 'EmployeeController::create');

$routes->get('interview', 'InterviewController::index');
$routes->get('log', 'LogController::index');
$routes->get('order', 'OrderController::index');
$routes->get('position', 'PositionController::index');
$routes->get('recruit', 'RecruitController::index');
$routes->get('vacation', 'VacationController::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
