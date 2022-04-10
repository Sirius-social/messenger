<?php


namespace App\Repositories\WEB\Section;


use App\Models\Section;
use App\Repositories\BaseRepositoryEloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use JetBrains\PhpStorm\Pure;

class SectionRepositoryEloquent extends BaseRepositoryEloquent implements SectionRepositoryInterface
{
    #[Pure] public function __construct()
    {
        $this->model = new Section();
    }

    public function getByPageName(string $page_name): Collection
    {
        return $this->getQuery()->whereHas('page', function (Builder $query) use ($page_name) {
            $query->where('name', $page_name);
        })->get();
    }

    public function getByPageRouteName(string $route_name): Collection
    {
        return $this->getQuery()->whereHas('page', function (Builder $query) use ($route_name) {
            $query->where('route_name', $route_name);
        })->get();
    }
}
