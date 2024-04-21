<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(\App\Validators\ReCaptcha::class, function ($app) {
            return new \App\Validators\ReCaptcha($app['recaptcha']);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('recaptcha', 'App\\Validators\\ReCaptcha@validate');
    }
}
