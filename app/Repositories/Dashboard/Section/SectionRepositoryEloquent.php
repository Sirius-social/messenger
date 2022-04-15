<?php


namespace App\Repositories\Dashboard\Section;


use App\Models\Section;
use App\Repositories\BaseRepositoryEloquent;
use App\Services\UploadFile;
use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\Pure;

class SectionRepositoryEloquent extends BaseRepositoryEloquent implements SectionRepositoryInterface
{
    #[Pure] public function __construct()
    {
        $this->model = new Section();
    }

    public function getTypes(): array
    {
        return $this->model->getTypes();
    }

    /**
     * @param array $input
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Exception
     */
    public function create(array $input): Model
    {
        $this->fill($input, $this->model);
        $this->model->save();
        return $this->model;
    }

    /**
     * @param array $input
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Exception
     */
    public function update(array $input, int $id): Model
    {
        $item = $this->find($id);
        $this->fill($input, $item);
        $item->save();
        return $item;
    }

    /**
     * @param array $input
     * @param \App\Models\Section|\Illuminate\Database\Eloquent\Model $model
     * @throws \Exception
     */
    private function fill(array $input, Section|Model $model)
    {
        $lang = $input['language'];
        $model->setTypeAttribute($input['type']);
        $model->setPageIdAttribute((int)$input['page_id']);
        $model->setTranslation('title', $lang, $input['title_'.$lang]);
        if ($this->inputHasKeyAndNotNull($input, 'bg_class')) {
            $model->setBgClassAttribute($input['bg_class']);
        }
        if ($this->inputHasKeyAndNotNull($input, 'lead_'.$lang)) {
            $model->setTranslation('lead', $lang, $input['lead_'.$lang]);
        }
        if ($this->inputHasKeyAndNotNull($input, 'subtitle_'.$lang)) {
            $model->setTranslation('subtitle', $lang, $input['subtitle_'.$lang]);
        }
        if ($this->inputHasKeyAndNotNull($input, 'description_'.$lang)) {
            $model->setTranslation('description', $lang, $input['description_'.$lang]);
        }
        if ($this->inputHasKeyAndNotNull($input, 'youtube_link_'.$lang)) {
            $link = $model->getYoutubeIdFromUrl($input['youtube_link_'.$lang]);
            $model->setTranslation('youtube_link', $lang, $link);
        }
        if ($this->inputHasKeyAndNotNull($input, 'uploaded_photo_'.$lang)) {
            $value = $input['uploaded_photo_'.$lang];
            $path = (new UploadFile)->upload($value);
            $model->setTranslation('file_path', $lang, $path);
        }
    }

    #[Pure] private function inputHasKeyAndNotNull(array $input, string $key): bool
    {
        return key_exists($key, $input) && $input[$key];
    }
}
