<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class NewUserRegistration extends Mailable
{
    use Queueable, SerializesModels;
    public $body;
    /**
     * Create a new message instance.
     */
    public function __construct($body)
    {
        $this->body = $body;
    }

    /**
     * Get the message envelope.
     */
    public function envelope()
    {
        return new Envelope(
            // from: new Address('noreply@a1options.com', 'A1options.com'),
            // bcc: new Address('chukwujidesmond3376@gmail.com', 'A1options.com'),
            subject: 'Email Verification',
            // from: 'noreply@a1options.com',
            from: new Address('info.transcendtrade@gmail.com', 'transcendtrade.org'),
            // bcc: [new Address('chukwujidesmond3376@gmail.com', 'Example Name')],
        );
 

    }

    /**
     * Get the message content definition.
     */
    public function content()
    {
        return new Content(
            view: 'Emails.new-registration',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
