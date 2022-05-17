<?php

namespace App\Observers;

use App\Mail\FeedbackResponseMail;
use App\Models\FeedbackResponse;
use App\Services\SenderMail;
use Illuminate\Support\Facades\Mail;

class FeedbackResponseObserver
{
    public function created(FeedbackResponse $feedbackResponse)
    {
        Mail::to($feedbackResponse->feedback->email)->send(
            new FeedbackResponseMail($feedbackResponse->feedback)
        );
    }
}
