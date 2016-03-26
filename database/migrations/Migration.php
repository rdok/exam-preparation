<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  25/03/16
 */

namespace database\migrations;

interface Migration
{
    public function up();

    public function down();

    public function getTableName();
}

