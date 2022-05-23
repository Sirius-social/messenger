<?php

namespace App\Repositories\WEB\Feedback;

use App\Models\Feedback;
use App\Repositories\BaseRepositoryEloquent;

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

    public function create(array $input): Feedback
    {
        unset($input['policy']);
        return $this->getQuery()->create($input);
    }
}
