<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->bind(
         'App\ViewModels\ICreateAlumniModel',
         'App\ViewModels\CreateAlumniModel'
        );
        $this->app->bind(
        'App\ViewModels\IViewAlumniModel',
        'App\ViewModels\ViewAlumniModel'
        );
        $this->app->bind(
         'App\BusinessObjects\IAlumni',
         'App\BusinessObjects\Alumni'
        );
        $this->app->bind(
        'App\Services\IAlumniService',
        'App\Services\AlumniService'
        );

        $this->app->bind(
        'App\Repositories\IAlumniRepository',
        'App\Repositories\AlumniRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
    }
}
