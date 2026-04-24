<?php

namespace App\Providers;

use App\Interfaces\PaymentInterface;
use App\Services\RazorpayService;
use App\Services\StripeService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentInterface::class, RazorpayService::class);  

        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
}
