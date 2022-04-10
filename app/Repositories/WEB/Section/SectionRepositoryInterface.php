<?php


namespace App\Repositories\WEB\Section;


use App\Repositories\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface SectionRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * @param string $page_name
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getByPageName(string $page_name): Collection;

    /**
     * @param string $route_name
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getByPageRouteName(string $route_name): Collection;
}
