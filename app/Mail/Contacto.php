<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\Mailer\Bridge\Mailgun\Transport\MailgunTransportFactory;


class Contacto extends Mailable
{
    use Queueable, SerializesModels;

    public $info;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->info = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        return $this->from($this->info['email'], $this->info['nombre'])
        ->cc('97ymark@gmail.com')
        ->subject($this->info['asunto'])
        ->view('emails.mailcontacto')
        ->with([
            'nombre' => $this->info['nombre'],
            'email' => $this->info['email'],
            'telefono' => $this->info['telefono'],
            'asunto' => $this->info['asunto'],
            'mensaje' => $this->info['mensaje']
        ]);
    }
}
