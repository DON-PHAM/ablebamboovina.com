<?php

namespace App\Providers;

use App\Repositories\AboutRepository;
use App\Repositories\BranchRepository;
use App\Repositories\CategoryPostRepository;
use App\Repositories\CategoryProductRepository;
use App\Repositories\EventRepository;
use App\Repositories\FeedbackRepository;
use App\Repositories\PaymentRepository;
use App\Repositories\PostRepository;
use App\Repositories\ProductRepository;
use App\Repositories\SettingRespository;
use App\Repositories\ShipRepository;
use App\Repositories\SliderRepository;
use App\Repositories\UserRepository;
use App\Repositories\VideoRepository;
use App\Services\AboutService;
use App\Services\BranchService;
use App\Services\CategoryPostService;
use App\Services\CategoryProductService;
use App\Services\EventService;
use App\Services\FeedbackService;
use App\Services\IPaymentDetailService;
use App\Services\IShipService;
use App\Services\PaymentDetailService;
use App\Services\PaymentService;
use App\Services\PostService;
use App\Services\ProductService;
use App\Services\SettingService;
use App\Services\SliderService;
use App\Services\UserService;
use App\Services\VideoService;
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
        $this->app->bind(
            AboutService::class,AboutRepository::class
        );
        $this->app->bind(
            PostService::class,PostRepository::class
        );
        $this->app->bind(
            VideoService::class,VideoRepository::class
        );
        $this->app->bind(
            EventService::class,EventRepository::class
        );
        $this->app->bind(
            PaymentService::class,PaymentRepository::class
        );
        $this->app->bind(
            IPaymentDetailService::class,PaymentDetailService::class
        );
        $this->app->bind(
            IShipService::class,ShipRepository::class
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
