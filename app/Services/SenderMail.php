<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;

class SenderMail
{
    public static function send(string $email, string $title, string $note)
    {
        Mail::send(
            'emails.message',
            ['email' => $email, 'note' => $note],
            function ($message) use ($email, $title, $note) {
                $message->to($email, $email)->subject($title);
            }
        );
    }
}
