<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Landing::index');
 
$routes->get('/customers', 'Customers::index');
$routes->get('/customers/create', 'Customers::create');
$routes->post('/customers/store', 'Customers::store');
$routes->get('/customers/edit/(:num)', 'Customers::edit/$1');
$routes->post('/customers/update/(:num)', 'Customers::update/$1');
$routes->get('/customers/delete/(:num)', 'Customers::delete/$1');

$routes->get('/leads', 'Leads::index');
$routes->get('/leads/create', 'Leads::create');
$routes->post('/leads/store', 'Leads::store');
$routes->get('/leads/edit/(:num)', 'Leads::edit/$1');
$routes->post('/leads/update/(:num)', 'Leads::update/$1');
$routes->get('/leads/delete/(:num)', 'Leads::delete/$1');

$routes->get('/salespersons', 'Salespersons::index');
$routes->get('/salespersons/create', 'Salespersons::create');
$routes->post('/salespersons/store', 'Salespersons::store');
$routes->get('/salespersons/edit/(:num)', 'Salespersons::edit/$1');
$routes->post('/salespersons/update/(:num)', 'Salespersons::update/$1');
$routes->get('/salespersons/delete/(:num)', 'Salespersons::delete/$1');

$routes->get('/interactions', 'Interactions::index');
$routes->get('/interactions/create', 'Interactions::create');
$routes->post('/interactions/store', 'Interactions::store');
$routes->get('/interactions/edit/(:num)', 'Interactions::edit/$1');
$routes->post('/interactions/update/(:num)', 'Interactions::update/$1');
$routes->get('/interactions/delete/(:num)', 'Interactions::delete/$1');

$routes->get('/transactions', 'Transactions::index');
$routes->get('/transactions/create', 'Transactions::create');
$routes->post('/transactions/store', 'Transactions::store');
$routes->get('/transactions/edit/(:num)', 'Transactions::edit/$1');
$routes->post('/transactions/update/(:num)', 'Transactions::update/$1');
$routes->get('/transactions/delete/(:num)', 'Transactions::delete/$1');