<?php


namespace App\Repositories\Dashboard\Page;


use App\Models\Page;
use App\Repositories\BaseRepositoryEloquent;

class PageRepositoryEloquent extends BaseRepositoryEloquent implements PageRepositoryInterface
{
    /**
     * PageRepositoryEloquent constructor.
     */
    public function __construct()
    {
        $this->model = new Page();
    }
}
