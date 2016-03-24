<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  24/03/16
 */
namespace App\Http\Controllers;

/**
 * @property string layout
 */
abstract class BaseController
{
    protected $viewsPath;
    protected $content;
    protected $data;
    protected $layout;

    public function __construct()
    {
        $this->viewsPath = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR
            .'Views'.DIRECTORY_SEPARATOR;

        $this->layout = $this->viewsPath.'layouts'.DIRECTORY_SEPARATOR.'master.php';
    }

    protected function view($view, $data = null)
    {
        $this->content = $this->viewsPath.$view.'.php';
        $this->data = $data;

        require $this->layout;
    }

    public function content()
    {
        require $this->content;
    }
}