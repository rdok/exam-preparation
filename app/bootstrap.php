<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  25/03/16
 */
session_start();
$_SESSION[ 'CURRENT_URL' ] = $_SERVER[ 'REQUEST_URI' ];

use App\Controllers\ExceptionsController;
use App\Controllers\HoneyPotController;
use App\Controllers\WelcomeController;
use App\IoC;
use App\Notifiers\SessionNotifier;

IoC::register(WelcomeController::class, function () {
    $welcomeController = new WelcomeController();

    return $welcomeController;
});

IoC::register(HoneyPotController::class, function () {
    $honeyPotController = new HoneyPotController();

    return $honeyPotController;
});

IoC::register(ExceptionsController::class, function () {
    $exceptionsController = new ExceptionsController();

    return $exceptionsController;
});

IoC::register(SessionNotifier::class, function () {
    $sessionNotifier = new SessionNotifier();

    return $sessionNotifier;
});
