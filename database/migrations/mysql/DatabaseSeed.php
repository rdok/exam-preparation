<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  26/03/16
 */
namespace Database\migrations\mysql;

use App\Kernel\DbManager;

class DatabaseSeed
{
    /**
     * @var DbManager
     */
    protected $dbManager;

    public function __construct(DbManager $dbManager)
    {
        $this->dbManager = $dbManager;
    }

    public function up()
    {
        (new CreateUsersTable($this->dbManager))->up();
    }
}