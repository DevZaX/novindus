<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class composerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('errors.404','App\Http\ViewComposers\noteFound');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
