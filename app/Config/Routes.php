<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
 $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Home page
$routes->get('/', 'HomeController::index');

    //Auth
    $routes->get('/login', 'AuthController::login');
    $routes->post('/validateLogin', 'AuthController::validateLogin');
    $routes->get('/register', 'AuthController::register');
    $routes->get('/forget', 'AuthController::forget');
    $routes->get('/recover', 'AuthController::recover');
    $routes->get('/logout', 'AuthController::logout');
    
    //Internal Pages
    $routes->get('/dashboard', 'HomeController::dashboard');
    $routes->get('/reqcompose', 'PostrequirementController::index');
    $routes->get('/hotcompose', 'HotlistController::index');
    $routes->get('/status', 'CampaignController::index');
    $routes->get('/campaign-details/(:num)', 'CampaignController::status_details/$1');
    $routes->get('/account', 'AccountController::index');
    
    //Contact List Controller
    $routes->get('/upload-contact', 'ContactController::index');
    $routes->get('/find-contact', 'ContactController::findcontact');
    $routes->post('/find-contact', 'ContactController::findcontact');
    $routes->post('/contact/create', 'ContactController::create');
    $routes->get('/find-contact/delete/(:num)', 'ContactController::deletecontacts/$1');
    $routes->post('/find-contact/fetch_modal', 'ContactController::fetch_modal_data');
    $routes->post('/find-contact/update', 'ContactController::updateContact');
    
    //List Controller
    $routes->get('/list', 'ListController::index');
    $routes->post('/list/create', 'ListController::create');
    $routes->get('/list/find', 'ListController::edit');
    $routes->post('/list/find', 'ListController::edit');
    $routes->get('list/delete/(:num)', 'ListController::deleteList/$1');
    $routes->post('/list/fetch_modal', 'ListController::fetch_modal_data');
    $routes->post('/list/update', 'ListController::updateList');
    
    
    $routes->get('/usage_policy', 'PolicyController::usage_policy');
    $routes->get('/refund_policy', 'PolicyController::refund_policy');
    $routes->get('/privacy_policy', 'PolicyController::privacy_policy');
    $routes->get('/contactus', 'ContactController::contactus');

//MAILCHIP MARKTING API 
$routes->post('/draft', 'CampaignController::SaveCampaignDraft');



$routes->post('/send', 'CampaignController::sendEmail');
$routes->get('/send', 'CampaignController::sendEmail');
$routes->get('/camp', 'CampaignController::testing');


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
