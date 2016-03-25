<?php

/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  25/03/16
 */
namespace App\Notifications;

/**
 * Class Flash.
 */
class Flash
{

    public function success($message)
    {
        $this->message($message, 'success');
    }

    /**
     * @param        $message
     * @param string $level
     */
    public function message($message, $level = 'info')
    {
        $notification = new \stdClass();

        $notification->message = $message;
        $notification->level = $level;

        $notifications = array_key_exists('flash_notifications', $_SESSION) ? $_SESSION[ 'flash_notifications' ] : [];

        array_push($notifications, $notification);

        $_SESSION[ 'flash_notifications' ] = $notifications;
    }

    public function error($message)
    {
        $this->message($message, 'error');
    }
}