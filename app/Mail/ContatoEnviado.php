<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Contato;

class ContatoEnviado extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * O contato enviado
     *
     * @var Contato
     */
    public $contato;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contato $contato)
    {
        $this->contato = $contato;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Novo contato')
            ->markdown('emails.contato.enviado')
            //anexando arquivo
            ->attachFromStorage($this->contato->path_arquivo);
    }
}
