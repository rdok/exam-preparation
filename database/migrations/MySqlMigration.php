<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  25/03/16
 */
namespace Database\migrations;

use App\Kernel\DbManager;

abstract class MySqlMigration implements Migration
{
    protected $columnCreatedAt = "created_at";
    protected $columnCreatedAtFormat = "Y-m-d H:i:s";
    protected $columnUpdatedAt = "updated_at";
    protected $columnUpdateAtFormat = "Y-m-d H:i:s";
    /**
     * @var DbManager
     */
    protected $dbManager;

    public function __construct(DbManager $dbManager)
    {
        $this->dbManager = $dbManager;
    }

    /**
     * Reverse the migrations
     */
    public function down()
    {
        $tableDeleted = $this->dbManager->getConnection()
            ->prepare("DESCRIBE `".getenv('DB_NAME')."`.`".$this->getTableName()."`")
            ->execute();

        if ($tableDeleted === false) {
            return;
        }

        $this->dbManager->getConnection()
            ->prepare("SET FOREIGN_KEY_CHECKS=0")
            ->execute();

        $this->dbManager->getConnection()
            ->prepare("TRUNCATE TABLE `".getenv('DB_NAME')."`.`".$this->getTableName()."`")
            ->execute();

        $this->dbManager->getConnection()
            ->prepare("DROP TABLE IF EXISTS `".getenv('DB_NAME')."`.`".$this->getTableName()."`")
            ->execute();

        $this->dbManager->getConnection()
            ->prepare("SET FOREIGN_KEY_CHECKS=1")
            ->execute();

        if ($tableDeleted === false) {
            echo "Error: Unable to delete '{$this->getTableName()}'.\n";

            return;
        }

        echo "'{$this->getTableName()}' table destroyed.\n";
    }
}

