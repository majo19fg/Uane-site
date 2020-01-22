<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyDesignerRequestMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $designRequest;
    protected $datosDesigner;
    
    public function __construct($designRequest, $datosDesigner)
    {
        $this->designRequest = $designRequest;
        $this->datosDesigner = $datosDesigner;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('partial.mail.notifyDesignerRequest')
        ->from('leads@uane.edu.mx', 'UANE Website');
    }
}
