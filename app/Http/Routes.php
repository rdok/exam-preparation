<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  24/03/16
 */
namespace App\Http;

/**
 * Class Routes.
 */
class Routes
{
    /**
     * @param $url
     * @param $controller
     * @return null
     */
    public function get($url, $controller, $function)
    {
        if ($url !== $_SERVER[ 'REQUEST_URI' ] || 'GET' !== $_SERVER[ 'REQUEST_METHOD' ]) {
            return null;
        }

        return (new $controller)->$function();
    }

    public function post($url, $controller, $function)
    {
        if ($url !== $_SERVER[ 'REQUEST_URI' ] || 'POST' !== $_SERVER[ 'REQUEST_METHOD' ]) {
            return null;
        }

        return (new $controller)->$function();
    }
}