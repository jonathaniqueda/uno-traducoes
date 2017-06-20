<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 10/06/2016
 * Time: 14:47
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Ufox\ApiCenter;

class ApiCenterServiceProvider extends ServiceProvider
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
        $this->app->singleton('ApiCenter', function(){
            return new ApiCenter();
        });
    }
}