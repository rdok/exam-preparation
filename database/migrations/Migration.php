<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  25/03/16
 */

namespace Database\migrations;

interface Migration
{
    public function create();

    public function destroy();

    public function getTableName();
}

