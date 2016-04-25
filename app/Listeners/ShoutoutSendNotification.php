<?php

namespace App\Listeners;

use App\Events\ShoutoutAddedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShoutoutSendNotification
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
     * @param  ShoutoutAddedEvent  $event
     * @return void
     */
    public function handle(ShoutoutAddedEvent $event)
    {
        //
    }
}
