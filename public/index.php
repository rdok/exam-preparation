<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  24/03/16
 */
require __DIR__.'/../vendor/autoload.php';

$routes = new \App\Http\Routes();

$routes->get('/', \App\Http\Controllers\WelcomeController::class, 'welcome');
$routes->post('/post', \App\Http\Controllers\WelcomeController::class, 'post');


