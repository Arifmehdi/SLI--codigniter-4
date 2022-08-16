<?php

namespace Config;
use App\Controllers\AdminController;
use App\Controllers\Home;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//routes for template start
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/services', 'Home::service');
$routes->get('/team', 'Home::team');
$routes->get('/news', 'Home::news');
$routes->get('/contact', 'Home::contact');
//routes for template end


//routes for admin start
$routes->get('/admin','AdminController::index');
$routes->get('/admin2','AdminController::admin');
$routes->get('/blank','AdminController::blank');
$routes->get('/slider','AdminController::slider');
$routes->get('/add_slider','AdminController::create');
//slider
$routes->post('/store_slider','AdminController::store_slider');
$routes->get('slider/edit/(:num)','AdminController::edit_slider/$1');
$routes->put('slider/update/(:num)','AdminController::update_slider/$1');
$routes->get('slider/delete/(:num)','AdminController::delete_slider/$1');
//founder
$routes->get('founder/add','AdminController::add_founder');
$routes->post('founder/store','AdminController::store_founder');
$routes->get('founder/view','AdminController::view_founder');
$routes->get('founder/edit/(:num)','AdminController::edit_founder/$1');
$routes->put('founder/update/(:num)','AdminController::update_founder/$1');
$routes->get('founder/delete/(:num)','AdminController::delete_founder/$1');
//contact
$routes->get('layout','Home::layout');
$routes->get('login','Home::login');
$routes->post('login_action','Home::login_action');


$routes->get('contact/add','AdminController::add_contact');
$routes->post('contact/store','AdminController::store_contact');
$routes->get('contact/view','AdminController::view_contact');
$routes->get('contact/edit/(:num)','AdminController::edit_contact/$1');
$routes->put('contact/update/(:num)','AdminController::update_contact/$1');
$routes->get('contact/delete/(:num)','AdminController::delete_contact/$1');

// service 
$routes->get('/service','AdminController::service');     
$routes->get('/service/(:num)','AdminController::service/$1');     
$routes->put('/service/update/(:num)','AdminController::update_service/$1');     
$routes->post('/service/store','AdminController::store_service');     
$routes->get('/service/view','AdminController::view_service');     
$routes->get('/service/delete/(:num)','AdminController::delete_service/$1');

//about slider
$routes->get('/aboutSlider','AdminController::aboutSlider');
$routes->get('/aboutSlider/(:num)','AdminController::aboutSlider/$1');     
$routes->put('/aboutSlider/update/(:num)','AdminController::update_aboutSlider/$1');     
$routes->post('/aboutSlider/store','AdminController::store_aboutSlider');     
$routes->get('/aboutSlider/view','AdminController::view_aboutSlider');     
$routes->get('/aboutSlider/delete/(:num)','AdminController::delete_aboutSlider/$1');
//routes for admin end


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
