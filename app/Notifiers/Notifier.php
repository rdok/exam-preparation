<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  25/03/16
 */
namespace App\Notifiers;

interface Notifier
{
    public function success($message);

    public function error($message);

    public function getNotifications();
}