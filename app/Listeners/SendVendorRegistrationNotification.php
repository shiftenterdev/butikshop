<?php

namespace App\Listeners;

use App\Events\VendorRegistered;

class SendVendorRegistrationNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle(VendorRegistered $event)
    {
        //
    }
}
