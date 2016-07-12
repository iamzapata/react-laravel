<?php

namespace ReactLaravel\Providers\Repositories;

use Illuminate\Support\ServiceProvider;

class CommentsRepositoryInterfaceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'ReactLaravel\Contracts\Repositories\CommentsRepositoryInterface',
            'ReactLaravel\Repositories\Comments\CommentsEloquentRepository'
        );
    }
}
