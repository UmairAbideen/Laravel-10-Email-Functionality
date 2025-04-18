<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendAttachment extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $subject;
    public $body;
    public $attachmentPath;

    public function __construct($title,$subject, $body, $attachmentPath)
    {
        $this->title = $title;
        $this->subject = $subject;
        $this->body = $body;
        $this->attachmentPath = $attachmentPath;
    }

    public function build()
    {
        return
        $this->title($this->title);
        $this->subject($this->subject)
            ->view('message')
            ->attach($this->attachmentPath);
    }
}
