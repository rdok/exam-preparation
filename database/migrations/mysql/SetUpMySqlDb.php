<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  25/03/16
 */
namespace database\migrations\mysql;

use database\migrations\Migration;

abstract class MySqlMigration implements Migration
{
    protected $columnCreatedAt = "created_at";
    protected $columnCreatedAtFormat = "Y-m-d H:i:s";
    protected $columnUpdatedAt = "updated_at";
    protected $columnUpdateAtFormat = "Y-m-d H:i:s";
    protected $db;

    /**
     * Run the migrations
     *
     * @return mixed
     */
    public abstract function up();

    /**
     * Reverse the migrations
     */
    public function down()
    {
        $tableDeleted = $this->db->getConnection()
            ->prepare("DESCRIBE `".App::getDbName()."`.`".$this->getTableName()."`")
            ->execute();
        if ($tableDeleted === false) return;
        $this->db->getConnection()
            ->prepare("SET FOREIGN_KEY_CHECKS=0")
            ->execute();
        $this->db->getConnection()
            ->prepare("TRUNCATE TABLE `".App::getDbName()."`.`".$this->getTableName()."`")
            ->execute();
        $this->db->getConnection()
            ->prepare("DROP TABLE IF EXISTS `".App::getDbName()."`.`".$this->getTableName()."`")
            ->execute();
        $this->db->getConnection()
            ->prepare("SET FOREIGN_KEY_CHECKS=1")
            ->execute();
        if ($tableDeleted === false) {
            echo "Error: Unable to delete '".$this->getTableName()."'.\n";
        } else {
            echo "'".$this->getTableName()."' table destroyed.\n";
        }
    }
}

