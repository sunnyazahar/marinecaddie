<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FormSubmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param  array<int, array{label: string, value: string}>  $fields
     */
    public function __construct(
        public string $formTitle,
        public array $fields,
        public string $sourcePage,
        public string $submittedAt,
        public ?string $replyToEmail = null,
        public ?string $replyToName = null,
    ) {}

    public function envelope(): Envelope
    {
        $replyTo = filled($this->replyToEmail)
            ? [new Address($this->replyToEmail, $this->replyToName ?: '')]
            : [];

        return new Envelope(
            subject: $this->formTitle,
            replyTo: $replyTo,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.form-submission',
        );
    }
}
