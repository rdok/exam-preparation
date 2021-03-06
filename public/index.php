<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  24/03/16
 */
use App\Controllers\ExceptionsController;
use App\Controllers\HoneyPotController;
use App\Controllers\WelcomeController;
use App\Kernel\IoC;
use App\Kernel\Router;

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../app/bootstrap.php';


$router = IoC::resolve(Router::class);

$router->get('/', IoC::resolve(WelcomeController::class), 'welcome');
$router->get('/honey-pot', IoC::resolve(HoneyPotController::class), 'get');
$router->post('/honey-pot', IoC::resolve(HoneyPotController::class), 'post');
$router->post('/post', IoC::resolve(WelcomeController::class), 'post');

$router->dispatch(IoC::resolve(ExceptionsController::class), 'notFound');
