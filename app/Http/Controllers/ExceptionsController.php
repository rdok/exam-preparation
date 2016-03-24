<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  24/03/16
 */
namespace App\Http\Controllers;

/**
 * Class ExceptionsController.
 */
class ExceptionsController
{
    public function notFound()
    {
        echo '404';

        return;
    }
}