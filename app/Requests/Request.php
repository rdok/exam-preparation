<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  25/03/16
 */
namespace App\Requests;

/**
 * Class Request.
 */
abstract class Request
{
    abstract public function validate();
}