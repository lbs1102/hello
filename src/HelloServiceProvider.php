<?php

namespace Leotest\Hello;

use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make(HelloController::class);
        include(__DIR__ . '/route.php');

        $this->loadViewsFrom(__DIR__ . '/views', 'HelloWorld');
    }
}
