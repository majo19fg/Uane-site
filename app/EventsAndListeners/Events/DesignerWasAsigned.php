<?php

namespace App\EventsAndListeners\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class DesignerWasAsigned
{
    use Dispatchable, SerializesModels;

    public $designRequest;
    public $datos;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    

    public function __construct($designRequest, $datos)
    {
        $this->designRequest = $designRequest;
        $this->datosDesigner = $datos;
    }

   
}
