<?php

/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  25/03/16
 */
namespace App\Notifiers;

use App\Models\Notification;

/**
 * Class SessionNotification.
 */
class SessionNotifier implements Notifier
{
    /**
     * @param $message
     */
    public function success($message)
    {
        $this->message($message, 'success');
    }

    /**
     * @param        $message
     * @param string $level
     */
    private function message($message, $level = 'info')
    {
        $notification = new Notification($message, $level);

        $notifications = $this->getNotifications();

        array_push($notifications, $notification);

        $_SESSION[ 'flash_notifications' ] = $notifications;
    }

    public function getNotifications()
    {
        if (isset($_SESSION[ 'flash_notifications' ])) {
            $notifications = $_SESSION[ 'flash_notifications' ];
            unset($_SESSION[ 'flash_notifications' ]);

            return $notifications;
        }

        return [];
    }

    /**
     * @param $message
     */
    public function error($message)
    {
        $this->message($message, 'error');
    }
}