<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  26/03/16
 */
namespace Database\migrations\mysql;

use App\Kernel\DbManager;

class DatabaseTables
{
    /**
     * @var DbManager
     */
    protected $dbManager;

    public function __construct(DbManager $dbManager)
    {
        $this->dbManager = $dbManager;
    }

    public function create()
    {
        (new UsersTable($this->dbManager))->create();
    }

    public function destroy()
    {
        (new UsersTable($this->dbManager))->destroy();
    }
}