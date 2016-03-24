<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  24/03/16
 */
namespace App\Http\Controllers;

class HoneyPotController extends BaseController
{
    public function get()
    {
        $name = 'name';

        $this->view('honey-pot', compact('name'));
    }

}