<?php

namespace App\Models;

use App\Helpers\MediaHelper;
use App\Helpers\YoutubeHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Section extends Model
{
    use HasFactory, HasTranslations, MediaHelper, YoutubeHelper;

    public array $translatable = ['title', 'lead', 'subtitle', 'description', 'file_path', 'youtube_link'];

    public const HERO = 'hero';
    public const ADDITION_INFO = 'addition_info';
    public const CONTENT = 'content';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }

    #[ArrayShape(['Hero' => "string", 'Addition information' => "string", 'Content' => "string"])] public function getTypes(): array
    {
        return [
            'Hero' => self::HERO,
            'Addition information' => self::ADDITION_INFO,
            'Content' => self::CONTENT
        ];
    }

    public function setTypeAttribute(string $value)
    {
        $this->attributes['type'] = $value;
    }

    public function setPageIdAttribute(int $value)
    {
        $this->attributes['page_id'] = $value;
    }

    public function setBgClassAttribute(string $value)
    {
        $this->attributes['bg_class'] = $value;
    }
}
