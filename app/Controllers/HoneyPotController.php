<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  24/03/16
 */
namespace App\Controllers;

use App\IoC;
use App\Notifiers\SessionNotifier;

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
        $sessionNotifier = IoC::resolve(SessionNotifier::class);

        if (isset($_POST[ 'inputWeb' ]) && $_POST[ 'inputWeb' ]) {
            $sessionNotifier->error('<strong>Error!</strong> Bot detected.');

            $sessionNotifier->view('honey-pot', compact('name'));

            return;
        }

        $sessionNotifier->success('<strong>Well done!</strong> Email sent.');

        $this->view('honey-pot', compact('name'));
    }
}