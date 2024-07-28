<?php

namespace App\Mail;

use App\Models\Settings;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ComposeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $body;
    public $filePaths;
    public $cc;
    public $bcc;

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
        $setting = Settings::first();
        $user = Auth::user();
        return new Content(
            view: 'emails.my-email',
            with: [
                'body' => $this->body,
                'setting' => $setting,
                'user' => $user,
            ],
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
        foreach ($this->filePaths as $filePath) {
            $fullPath = storage_path('app/public/' . $filePath);
            if (file_exists($fullPath)) {
                $attachments[] = Attachment::fromPath($fullPath);
            } else {
                Log::error("Unable to open path: " . $fullPath);
            }
        }
        return $attachments;
    }
}
