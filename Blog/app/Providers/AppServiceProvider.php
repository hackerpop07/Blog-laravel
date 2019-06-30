<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\App\Repositories\Contracts\BlogRepositoryInterface::class,
            \App\Repositories\Eloquent\BlogEloquentRepository::class);

        $this->app->singleton(\App\Services\BlogServiceInterface::class,
            \App\Services\BlogService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
