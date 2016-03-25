<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  25/03/16
 */
session_start();

$_SESSION['CURRENT_URL'] = $_SERVER['REQUEST_URI'];