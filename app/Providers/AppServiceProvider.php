<?php

namespace App\Providers;

use App\Repositories\BranchRepository;
use App\Repositories\CategoryPostRepository;
use App\Repositories\CategoryProductRepository;
use App\Repositories\FeedbackRepository;
use App\Repositories\ProductRepository;
use App\Repositories\SettingRespository;
use App\Repositories\SliderRepository;
use App\Repositories\UserRepository;
use App\Services\BranchService;
use App\Services\CategoryPostService;
use App\Services\CategoryProductService;
use App\Services\FeedbackService;
use App\Services\ProductService;
use App\Services\SettingService;
use App\Services\SliderService;
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
        $this->app->bind(
            CategoryPostService::class,CategoryPostRepository::class
        );
        $this->app->bind(
            ProductService::class,ProductRepository::class
        );
        $this->app->bind(
            BranchService::class,BranchRepository::class
        );
        $this->app->bind(
            SliderService::class,SliderRepository::class
        );
        $this->app->bind(
            FeedbackService::class,FeedbackRepository::class
        );
        $this->app->bind(
            SettingService::class,SettingRespository::class
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
