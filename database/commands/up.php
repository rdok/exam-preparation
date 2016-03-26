<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  25/03/16
 */

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../app/bootstrap.php';

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../../..');
$dotenv->load();
$dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USERNAME', 'DB_PASSWORD', 'DB_PORT'])->notEmpty();
$database = new SetUpMySqlDb();
$database->up();