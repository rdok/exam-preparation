<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  26/03/16
 */
use App\Kernel\DbManager;
use App\Kernel\IoC;
use Database\migrations\mysql\DatabaseTables;

require __DIR__.'/../../vendor/autoload.php';
require __DIR__.'/../../app/bootstrap.php';

$dotenv = new Dotenv\Dotenv(__DIR__.'/../..');
$dotenv->load();
$dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASSWORD', 'DB_PORT'])->notEmpty();

$dbManager = IoC::resolve(DbManager::class);

$dbSeed = new DatabaseTables($dbManager);

$dbSeed->destroy();
