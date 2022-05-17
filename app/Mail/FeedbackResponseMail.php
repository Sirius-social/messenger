<?php

namespace App\Mail;

use App\Models\Feedback;
use Illuminate\Mail\Mailable;

class FeedbackResponseMail extends Mailable
{
    public function __construct(protected Feedback $feedback)
    {
        //
    }

    public function build()
    {
        return $this->view('emails.feedback-response', [
            'title' => $this->feedback->response->title,
            'note' => $this->feedback->response->note,
            'question' => $this->feedback->body
        ]);
    }
}
