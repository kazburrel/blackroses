<?php

namespace App\Mailables;

use Utyemma\LaraNotice\Mailable;

class ContactMailable extends Mailable {

    protected $source = 'database';

    /**
    * Get the mail representation of the notification.
    */
    function toDatabase() : array {
        return [];
    }

}
