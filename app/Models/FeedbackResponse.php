<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\FeedbackResponse
 *
 * @property int $id
 * @property string $title
 * @property string $note
 * @property int $feedback_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Feedback|null $feedback
 * @method static \Database\Factories\FeedbackResponseFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackResponse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackResponse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackResponse query()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackResponse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackResponse whereFeedbackId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackResponse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackResponse whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackResponse whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackResponse whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FeedbackResponse extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var string[]|bool
     */
    protected $guarded = [];

    /**
     * Get feedback that own this response.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function feedback(): BelongsTo
    {
        return $this->belongsTo(Feedback::class);
    }
}
