<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  24/03/16
 */
namespace App\Controllers;

class HoneyPotController extends BaseController
{
    public function get()
    {
        $this->sessionNotifier->success('<strong>Well done!</strong> Email sent.');

        $name = 'Some Name';

        $this->view('honey-pot', compact('name'));
    }

    public function post()
    {
        $this->sessionNotifier->success('Email sent.');

        $this->view('honey-pot', compact('name'));
    }
}