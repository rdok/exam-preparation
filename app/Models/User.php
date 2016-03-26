<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  26/03/16
 */
namespace App\Models;

class User
{
    public static $tableName = 'users';
    public static $columnPrimaryKey = 'id';
    public static $columnFirstName = 'first_name';
    public static $columnLastName = 'last_name';
    public static $columnEmail = 'email';
    public static $columnPassword = 'password';
}