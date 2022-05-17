<?php

namespace App\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepositoryEloquent implements BaseRepositoryInterface
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected Model $model;

    public function getQuery(): Builder
    {
        return $this->model->newQuery();
    }

    /**
     * @inheritDoc
     */
    public function all(string|array $with = null): Collection
    {
        $query = $this->getQuery();

        if (!is_null($with)) {
            $query->with($with);
        }

        return $query->latest()->get();
    }

    /**
     * @inheritDoc
     */
    public function paginated(
        $perPage = 24,
        string|array $with = null
    ): LengthAwarePaginator {
        $query = $this->getQuery();

        if (!is_null($with)) {
            $query->with($with);
        }

        return $query->latest()->paginate($perPage);
    }

    /**
     * @inheritDoc
     */
    public function create(array $input): Model
    {
        return $this->model->query()->create($input);
    }

    /**
     * @inheritDoc
     */
    public function find(int $id, string|array $with = null): Model
    {
        $query = $this->getQuery();

        if (!is_null($with)) {
            $query->with($with);
        }

        return $query->findOrFail($id);
    }

    /**
     * @inheritDoc
     */
    public function update(array $input, int $id): Model
    {
        $item = $this->find($id);
        $item->update($input);
        return $item;
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id): bool
    {
        return $this->find($id)->delete();
    }
}
