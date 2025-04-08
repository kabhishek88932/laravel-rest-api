<?php

namespace App\Listeners;

use App\Events\PostCreated;
use App\Mail\PostCreatedMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendAdminNotification
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
     * @param  \App\Events\PostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {
        // Send to admin (hardcoded or use config value)
        Mail::to('admin@example.com')->send(new PostCreatedMail($event->post));
    }
}
