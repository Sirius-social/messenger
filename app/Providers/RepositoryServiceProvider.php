<?php

namespace App\Providers;

use App\Repositories\Dashboard\Page\PageRepositoryEloquent;
use App\Repositories\Dashboard\Page\PageRepositoryInterface;
use App\Repositories\Dashboard\Section\SectionRepositoryEloquent;
use App\Repositories\Dashboard\Section\SectionRepositoryInterface;
use App\Repositories\WEB\Section\SectionRepositoryEloquent as WEBSectionRepositoryEloquent;
use App\Repositories\WEB\Section\SectionRepositoryInterface as WEBSectionRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PageRepositoryInterface::class, PageRepositoryEloquent::class);
        $this->app->bind(SectionRepositoryInterface::class, SectionRepositoryEloquent::class);

        $this->app->bind(WEBSectionRepositoryInterface::class, WEBSectionRepositoryEloquent::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
