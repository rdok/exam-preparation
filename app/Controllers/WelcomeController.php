<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  24/03/16
 */
namespace App\Controllers;

/**
 * Class WelcomeController.
 */
class WelcomeController extends BaseController
{
    /**
     * @return string
     */
    public function welcome()
    {
        return 'welcome';
    }

    /**
     * @return string
     */
    public function post()
    {
        return 'post';
    }
}