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
}
