<?php

namespace App\Repositories\Dashboard\Feedback;

use App\Models\Feedback;
use App\Repositories\BaseRepositoryEloquent;
use Illuminate\Database\Eloquent\Model;

class FeedbackRepositoryEloquent extends BaseRepositoryEloquent implements
    FeedbackRepositoryInterface
{
    /**
     * FeedbackRepositoryEloquent constructor.
     */
    public function __construct()
    {
        $this->model = new Feedback();
    }

    /**
     * @inheritDoc
     */
    public function createResponse(int $id, array $input): Model
    {
        $item = $this->find($id);
        return $item->response()->create([
            'title' => $input['response_title'],
            'note' => $input['response_note']
        ]);
    }

    /**
     * @inheritDoc
     */
    public function deleteResponse(int $id): bool
    {
        return $this->find($id)
            ->response()
            ->delete();
    }
}
