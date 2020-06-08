<?php namespace Config;

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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Frontend::index');

$routes->get('/login', 'Auth::index');
$routes->post('/login/auth', 'Auth::autenticate');
$routes->get('/logout', 'Auth::sessionDestroy');
$routes->get('/recover-password', 'Auth::recoverPassword');
$routes->post('/recover-password/get-token', 'Auth::recoverPasswordToken');
$routes->get('/recover-password/change/(:any)', 'Auth::changePassword/$1');
$routes->post('/recover-password/set-new-password/(:num)', 'Auth::setNewPassword/$1');
$routes->get('/register', 'Auth::register');
$routes->post('/register/create', 'Auth::createUserInfrontend');

$routes->group('admin', function($routes){
  $routes->get('/', 'Backend::index');
});

$routes->group('admin/users', function($routes){
  $routes->get('/', 'Users::users');
  $routes->get('new', 'Users::newUser');
  $routes->post('save', 'Users::saveUser');
  $routes->post('delete/(:num)', 'Users::deleteUser/$1');
  $routes->post('edit/(:num)', 'Users::editUser/$1');
  $routes->post('update/(:num)', 'Users::updateUser/$1');
});

$routes->group('admin/samples', function($routes){
  $routes->get('dashboard', 'Samples::dashboard');
  $routes->get('forms', 'Samples::forms');
  $routes->get('ui', 'Samples::ui');
  $routes->get('datatables', 'Samples::datatables');
  $routes->get('login', 'Samples::login');
});

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
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
