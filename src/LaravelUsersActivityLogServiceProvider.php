<?php

namespace RezaKia\LaravelUsersActivityLog;

use Illuminate\Support\ServiceProvider;

class LaravelUsersActivityLogServiceProvider extends ServiceProvider
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
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->publishes([realpath(__DIR__.'/migrations') => database_path('migrations')],'migrations');

    }
}
