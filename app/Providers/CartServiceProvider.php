<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Facade\Handle\StoreCart;
use App;

class CartServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Cart', StoreCart::class);
    }
}
