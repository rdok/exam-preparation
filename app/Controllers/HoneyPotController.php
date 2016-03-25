<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  24/03/16
 */
namespace App\Controllers;

/**
 * Class HoneyPotController.
 */
class HoneyPotController extends BaseController
{
    public function get()
    {
        $name = 'Some Name';

        $this->view('honey-pot', compact('name'));
    }

    public function post()
    {
        if (isset($_POST[ 'inputWeb' ]) && $_POST['inputWeb']) {
            $this->sessionNotifier->error('<strong>Error!</strong> Bot detected.');

            $this->view('honey-pot', compact('name'));

            return;
        }

        $this->sessionNotifier->success('<strong>Well done!</strong> Email sent.');

        $this->view('honey-pot', compact('name'));
    }
}