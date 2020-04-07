<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Talanoff\ImpressionAdmin\Services\Navigation;


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
        app()->singleton('nav', function () {
            return new Navigation();
        });
    }
}
