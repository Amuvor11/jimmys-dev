<?php

namespace App\Providers;


use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

//
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Validator::extend('recaptcha', 'App\\Validators\\ReCaptcha@validate');

        // Force HTTPS for asset/url generation only on production (e.g. Render), not locally
        $appUrl = config('app.url');
        $isProduction = config('app.env') === 'production';
        $isHttpsUrl = $appUrl && strpos($appUrl, 'https://') === 0;
        $isLocalHost = $appUrl && (strpos($appUrl, 'localhost') !== false || strpos($appUrl, '127.0.0.1') !== false);
        if ($isProduction && $isHttpsUrl && !$isLocalHost) {
            URL::forceScheme('https');
        }
    }
}
