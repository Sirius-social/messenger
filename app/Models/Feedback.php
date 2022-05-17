<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Feedback extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var string[]|bool
     */
    protected $guarded = [];

    /**
     * Get all of the responses for the feedback.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function response(): HasOne
    {
        return $this->hasOne(FeedbackResponse::class);
    }
}
