<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  25/03/16
 */
if (! empty($notifications = $this->sessionNotifier->getNotifications())) {
    foreach ($notifications as $notification) {
        ?>
        <div class="alert alert-dismissible alert-<?= $notification->getLevel(); ?>">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= $notification->getMessage(); ?>
        </div>
        <?php
    }
}
