<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  25/03/16
 */
session_start();

$_SESSION[ 'CURRENT_URL' ] = isset($_SERVER[ 'REQUEST_URI' ]) ? $_SERVER[ 'REQUEST_URI' ]: '';

use App\Controllers\ExceptionsController;
use App\Controllers\HoneyPotController;
use App\Controllers\WelcomeController;
use App\Kernel\DbManager;
use App\Kernel\IoC;
use App\Kernel\Router;
use App\Notifiers\SessionNotifier;

IoC::register(WelcomeController::class, function () {
    $welcomeController = new WelcomeController();

    return $welcomeController;
});

IoC::register(ExceptionsController::class, function () {
    $exceptionsController = new ExceptionsController();

    return $exceptionsController;
});

IoC::register(SessionNotifier::class, function () {
    $sessionNotifier = new SessionNotifier();

    return $sessionNotifier;
});

IoC::register(HoneyPotController::class, function () {
    $honeyPotController = new HoneyPotController();
    $honeyPotController->setDependencies(IoC::resolve(SessionNotifier::class));

    return $honeyPotController;
});

IoC::register(Router::class, function () {
    $router = new Router();

    return $router;
});

IoC::register(DbManager::class, function () {
    $dbManager = new DbManager();

    return $dbManager;
});

