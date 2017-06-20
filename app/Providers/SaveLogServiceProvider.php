<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Ufox\SaveLog;

class SaveLogServiceProvider extends ServiceProvider
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
        $this->app->singleton('SaveLog', function() {
            return new SaveLog();
        });
    }
}
