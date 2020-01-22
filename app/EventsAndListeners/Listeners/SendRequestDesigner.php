<?php

namespace App\EventsAndListeners\Listeners;

use App\EventsAndListeners\Events\DesignerWasAsigned;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyDesignerRequestMessage;

class SendRequestDesigner
{
    /**
     * Handle the event.
     *
     * @param  DesignerWasAsigned  $event
     * @return void
     */
    public function handle(DesignerWasAsigned $event)
    {
        Mail::to($event->datosDesigner)->queue(new NotifyDesignerRequestMessage($event->designRequest, $event->datosDesigner));

    }
}
