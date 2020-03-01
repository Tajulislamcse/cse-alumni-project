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
        /***Alumni's binding***/
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

        /***techer's binding***/
        $this->app->bind(
         'App\ViewModels\ICreateTeacherModel',
         'App\ViewModels\CreateTeacherModel'
        );
        $this->app->bind(
        'App\ViewModels\IViewTeacherModel',
        'App\ViewModels\ViewTeacherModel'
        );
        $this->app->bind(
         'App\BusinessObjects\ITeacher',
         'App\BusinessObjects\Teacher'
        );
        $this->app->bind(
        'App\Services\ITeacherService',
        'App\Services\TeacherService'
        );

        $this->app->bind(
        'App\Repositories\ITeacherRepository',
        'App\Repositories\TeacherRepository'
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
