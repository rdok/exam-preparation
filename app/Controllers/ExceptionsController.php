<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  24/03/16
 */
namespace App\Controllers;

/**
 * Class ExceptionsController.
 */
class ExceptionsController extends BaseController
{
    public function notFound()
    {
        return '404';
    }
}