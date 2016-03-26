<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  26/03/16
 */
namespace Database\migrations\mysql;

use App\Models\User;
use Database\migrations\Migration;
use Database\migrations\MySqlMigration;

class UsersTable extends MySqlMigration implements Migration
{
    public function create()
    {
        $query =
            "CREATE TABLE `".getenv('DB_NAME')."`.`".User::$tableName."` (".
            "`".User::$columnPrimaryKey."` INT NOT NULL AUTO_INCREMENT, ".
            "`".User::$columnFirstName."` VARCHAR(45) NULL, ".
            "`".User::$columnLastName."` VARCHAR(45) NULL, ".
            "`".User::$columnEmail."` VARCHAR(255) NOT NULL, ".
            "`".User::$columnPassword."` VARCHAR(60) NOT NULL, ".
            "PRIMARY KEY (`".User::$columnPrimaryKey."`), ".
            "UNIQUE INDEX `".User::$columnEmail."_UNIQUE` (`".User::$columnEmail."` ASC));";

        $this->dbManager->getConnection()->prepare($query)->execute();

        echo "Table '".User::$tableName."' created.\n";
    }

    public function getTableName()
    {
        return User::$tableName;
    }
}