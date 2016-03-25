<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  24/03/16
 */
namespace App\Controllers;

use App\Notifiers\SessionNotifier;

/**
 * @property string layout
 */
abstract class BaseController
{
    protected $viewsPath;
    protected $content;
    protected $data;
    protected $layout;
    protected $sessionNotifier;
    private $navigation;

    public function __construct()
    {
        $this->viewsPath = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR;
        $this->layout = 'layouts'.DIRECTORY_SEPARATOR.'master';
        $this->navigation = '_partials'.DIRECTORY_SEPARATOR.'navigation';
        $this->sessionNotifier = new SessionNotifier();
    }

    public function content()
    {
        $this->render($this->content);
    }

    public function render($file)
    {
        $parts = explode('.', $file);

        $file = $this->viewsPath;

        foreach ($parts as $part) {
            $file .= $part.DIRECTORY_SEPARATOR;
        }

        require rtrim($file, DIRECTORY_SEPARATOR).'.php';
    }

    protected function view($view, $data = null)
    {
        $this->content = $view;
        $this->data = $data;

        $this->render($this->layout);
    }

    protected function url($url = null)
    {
        return "http://$_SERVER[HTTP_HOST]".DIRECTORY_SEPARATOR.$url;
    }
}