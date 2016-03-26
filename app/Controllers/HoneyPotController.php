<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  24/03/16
 */
namespace App\Controllers;

use App\IoC;
use App\Notifiers\Notifier;
use App\Notifiers\SessionNotifier;

/**
 * Class HoneyPotController.
 */
class HoneyPotController extends BaseController
{
    protected $notifier;

    public function get()
    {
        $name = 'Some Name';

        $this->view('honey-pot', compact('name'));
    }

    public function post()
    {
        if (isset($_POST[ 'inputWeb' ]) && $_POST[ 'inputWeb' ]) {
            $this->notifier->error('<strong>Error!</strong> Bot detected.');

            $this->view('honey-pot', compact('name'));

            return;
        }

        $this->notifier->success('<strong>Well done!</strong> Email sent.');

        $this->view('honey-pot', compact('name'));
    }

    public function setDependencies(Notifier $notifier)
    {
        $this->notifier = $notifier;
    }
}