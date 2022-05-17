<?php

namespace App\Repositories;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function getQuery(): Builder;

    /**
     * Get all resources of the model
     *
     * @param string|array|null $with
     * @return \Illuminate\Database\Eloquent\Collection;
     */
    public function all(string|array $with = null): Collection;

    /**
     * Get paginated resources of the model
     *
     * @param int $perPage
     * @param string|array|null $with
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function paginated(
        $perPage = 24,
        string|array $with = null
    ): LengthAwarePaginator;

    /**
     * Create specified resource from the model
     *
     * @param array $input
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(array $input): Model;

    /**
     * Find specified resource from the model
     *
     * @param int $id
     * @param string|array|null $with
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function find(int $id, string|array $with = null): Model;

    /**
     * Update specified resource from the model
     *
     * @param array $input
     * @param int $id
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update(array $input, int $id): Model;

    /**
     * Delete specified resource from the model
     *
     * @param int $id
     *
     * @return bool
     *
     * @throws \Exception
     */
    public function delete(int $id): bool;
}
