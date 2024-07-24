<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\TemporaryFile;

class ComposeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $body;
    public $filePaths;

    /**
     * Create a new message instance.
     */
    public function __construct($subject, $body, $filePaths = [])
    {
        $this->subject = $subject;
        $this->body = $body;
        $this->filePaths = $filePaths;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.my-email',
            with: ['body' => $this->body],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];
        foreach ($this->filePaths as $file) {
            $attachments[] = Attachment::fromStorage(
                storage_path('app/' . $file),
                basename($file),
                pathinfo(storage_path('app/' . $file), PATHINFO_EXTENSION)
            );
        }
        return $attachments;
    }
}
