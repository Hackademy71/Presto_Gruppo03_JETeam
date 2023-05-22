<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUser extends Mailable
{
    use Queueable, SerializesModels;

    public $user_to;
    public $user_from;
    public $message;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user_to, User $user_from, $message)
    {
        $this->user_to=$user_to;
        $this->user_from=$user_from;
        $this->message=$message;
    }

    public function build ()
    {
        return $this->from('presto.it@noreply.com')->view ('mail.contactUser');
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'There is a message for an announcement!',
        );
    }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

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
