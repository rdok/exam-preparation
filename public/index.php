<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  24/03/16
 */
use App\Controllers\ExceptionsController;
use App\Controllers\HoneyPotController;
use App\Controllers\WelcomeController;

require __DIR__.'/../vendor/autoload.php';


$router = new \App\Router();

$router->get('/', WelcomeController::class, 'welcome');
$router->get('/honey-pot', HoneyPotController::class, 'get');
$router->post('/honey-pot', HoneyPotController::class, 'post');
$router->post('/post', WelcomeController::class, 'post');

$router->dispatch(ExceptionsController::class, 'notFound');
