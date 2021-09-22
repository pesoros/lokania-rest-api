<?php

namespace Config;

$routes = Services::routes();

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->group('', ['namespace' => 'App\Controllers\API\v1'], function ($routes) {
    $routes->get('/','HomeController::index');
    $routes->group('api/v1', function ($routes) {
        $routes->get('/','HomeController::index');
        $routes->get('places','PlacesController::index');
        $routes->get('hotels','HotelsController::index');
        $routes->get('history','HistoryController::index');
        $routes->get('deals','DealsController::index');
        $routes->get('notifications','NotificationsController::index');
    });
});

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
