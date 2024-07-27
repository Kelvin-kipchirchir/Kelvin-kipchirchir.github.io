<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details = [$name,$email,$subject,$message];

    /**
     * Create a new message instance.
     *
     * return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     @return void
     */
    public function envelope():Envelope
    {
        return new Envelope(
            subject: 'hello',
        );
    }

    public function content():Content
    {
        return new Content(
            view:'emails.contact',
        );
    }

    public function attachments(): array{
        return [];
    }
    public function build()
    {
        //return $this->view('view.name');
    }
}
