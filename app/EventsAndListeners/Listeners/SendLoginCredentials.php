<?php

namespace App\EventsAndListeners\Listeners;

use App\EventsAndListeners\Events\UserWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\LoginCredentials;

class SendLoginCredentials
{
    /**
     * Handle the event.
     *
     * @param  UserWasCreated  $event
     * @return void
     */
    public function handle(UserWasCreated $event)
    {
        Mail::to($event->user, $event->password)->queue(new LoginCredentials($event->user, $event->password));
    }
}
