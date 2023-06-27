<?php

namespace App\Providers;

use App\Repositories\CategoryProductRepository;
use App\Repositories\UserRepository;
use App\Services\CategoryProductService;
use App\Services\UserService;
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
        $this->app->bind(
            UserService::class,UserRepository::class
        );
        $this->app->bind(
            CategoryProductService::class,CategoryProductRepository::class
        );
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
