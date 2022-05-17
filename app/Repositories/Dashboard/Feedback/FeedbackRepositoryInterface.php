<?php

namespace App\Repositories\Dashboard\Feedback;

use App\Repositories\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

interface FeedbackRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Save response to storage.
     *
     * @param int $id
     * @param array $input
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function createResponse(int $id, array $input): Model;

    /**
     * Delete response from the storage.
     *
     * @param int $id
     * @return bool
     */
    public function deleteResponse(int $id): bool;
}
