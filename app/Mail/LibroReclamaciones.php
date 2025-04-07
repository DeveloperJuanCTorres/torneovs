<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LibroReclamaciones extends Mailable
{
    use Queueable, SerializesModels;
    public $reclamo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mensaje)
    {
        $this->reclamo = $mensaje;
    }

    public function build()
    {
        return $this->view('email.reclamaciones');
    }

    
}
