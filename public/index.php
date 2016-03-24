<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  24/03/16
 */
require __DIR__.'/../vendor/autoload.php';

use App\Http\Controllers\WelcomeController;

$router = new \App\Http\Router();

$router->get('/', WelcomeController::class, 'welcome');
$router->post('/post', WelcomeController::class, 'post');


