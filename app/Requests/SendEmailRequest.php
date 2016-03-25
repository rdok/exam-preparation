<?php
namespace App\Requests;

use App\IoC;
use App\Notifiers\SessionNotifier;

/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  25/03/16
 */
class SendEmailRequest extends Request
{
    const INPUT_NAME = 'inputName';

    public function validate()
    {
        if (! isset($_POST[ self::INPUT_NAME ])) {
            IoC::resolve(SessionNotifier::class)->error('Name  is required');

            header('Location: '.$_SESSION[ 'CURRENT_URL' ]);
        }
    }
}