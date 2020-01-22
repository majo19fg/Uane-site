<?php

namespace App\Mail\DesignRequest;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $designRequestData;
    public function __construct($designRequestData)
    {
        $this->designRequestData = $designRequestData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('partial.mail.ConfirmationMail')
        ->from('leads@uane.edu.mx', 'UANE Website')
        ->subject('Tu solicitud se ha registrado exitosamente');
    }
}
