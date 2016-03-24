<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  24/03/16
 */
namespace App\Http\Controllers;

/**
 * Class WelcomeController.
 */
class WelcomeController
{
    public function welcome()
    {
        echo '<br>welcom test';
        return 'wecome';
    }

    public function post()
    {
        echo '<br>post test';
        return 'wecome';
    }
}