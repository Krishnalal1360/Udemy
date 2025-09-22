<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;   
use Illuminate\Support\Facades\Mail;    

class SendMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    
    /**
     * Create a new message instance.
     */
    //
    public $mailSubject, $mailBody;
    //
    public function __construct($mailSubject, $mailBody)
    {
        //
        $this->mailSubject = $mailSubject;
        //
        $this->mailBody = $mailBody;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            //from: new Address(),
            subject: $this->mailSubject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email_sent',
            with: [
                'mailBody' => $this->mailBody,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            //
            /*Attachment::fromPath(public_path('uploads/elon_musk.jpeg'))
                        ->as('elon_musk.jpeg')
                        ->withMime('image/jpeg'),*/
            //
            /*Attachment::fromStorageDisk('private', 'ben_stokes.jpg')
                        ->as('ben_stokes.jpg')
                        ->withMime('image/jpg'),*/
            //
            Attachment::fromStorageDisk('public', 'ab_de_villers.jpg')
                        ->as('ab_de_villers.jpg')
                        ->withMime('image/jpg'),
        ];
    }
}
