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
    public function all(): Collection
    {
        return $this->model->query()->latest()->get();
    }

    /**
     * @inheritDoc
     */
    public function paginated($perPage = 24): LengthAwarePaginator
    {
        return $this->model->query()->latest()->paginate($perPage);
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
    public function find(int $id): Model
    {
        return $this->model->query()->findOrFail($id);
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
