<?php

namespace App\Providers;

use App\Repositories\Dashboard\Feedback\FeedbackRepositoryEloquent as DashboardFeedbackRepositoryEloquent;
use App\Repositories\Dashboard\Feedback\FeedbackRepositoryInterface as DashboardFeedbackRepositoryInterface;
use App\Repositories\WEB\Feedback\FeedbackRepositoryEloquent as WEBFeedbackRepositoryEloquent;
use App\Repositories\WEB\Feedback\FeedbackRepositoryInterface as WEBFeedbackRepositoryInterface;
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
        $this->app->bind(
            DashboardFeedbackRepositoryInterface::class,
            DashboardFeedbackRepositoryEloquent::class
        );

        $this->app->bind(
            WEBFeedbackRepositoryInterface::class,
            WEBFeedbackRepositoryEloquent::class
        );
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
