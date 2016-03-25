<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  25/03/16
 */
use App\IoC;
use App\Notifiers\SessionNotifier;

if (! empty($notifications = IoC::resolve(SessionNotifier::class)->getNotifications())) {
    foreach ($notifications as $notification) {
        ?>
        <div class="alert alert-dismissible alert-<?= $notification->getLevel(); ?>">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= $notification->getMessage(); ?>
        </div>
        <?php
    }
}
