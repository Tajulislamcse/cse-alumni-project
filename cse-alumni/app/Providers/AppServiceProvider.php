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
         'App\ViewModels\IStoreAlumniModel',
         'App\ViewModels\StoreAlumniModel'
     );
        $this->app->bind(
            'App\ViewModels\IUpdateAlumniModel',
            'App\ViewModels\UpdateAlumniModel'
        );
        $this->app->bind(
            'App\ViewModels\IViewAlumniModel',
            'App\ViewModels\ViewAlumniModel'
        );
        $this->app->bind(
            'App\ViewModels\IUpdateProfessionModel',
            'App\ViewModels\UpdateProfessionModel'
        );
        $this->app->bind(
            'App\ViewModels\IUpdateImageModel',
            'App\ViewModels\UpdateImageModel'
        );
        $this->app->bind(
            'App\ViewModels\IAdminDashboardModel',
            'App\ViewModels\AdminDashboardModel'
        );
        $this->app->bind(
            'App\ViewModels\IHomePageModel',
            'App\ViewModels\HomePageModel'
        );
        $this->app->bind(
            'App\ViewModels\IViewPostModel',
            'App\ViewModels\ViewPostModel'
        );
        $this->app->bind(
         'App\BusinessObjects\IAlumni',
         'App\BusinessObjects\Alumni'
     );
        $this->app->bind(
         'App\BusinessObjects\IPost',
         'App\BusinessObjects\Post'
     );
        $this->app->bind(
         'App\BusinessObjects\ICategory',
         'App\BusinessObjects\Category'
     );
        $this->app->bind(
            'App\Services\IAlumniService',
            'App\Services\AlumniService'
        );
        $this->app->bind(
            'App\Services\IPostService',
            'App\Services\PostService'
        );
        $this->app->bind(
            'App\Services\ISliderService',
            'App\Services\SliderService'
        );
        $this->app->bind(
            'App\Repositories\IAlumniMainRepository',
            'App\Repositories\AlumniMainRepository'
        );
        $this->app->bind(
            'App\Repositories\ISliderRepository',
            'App\Repositories\SliderRepository'
        );
        $this->app->bind(
            'App\Services\INotificationService',
            'App\Services\NotificationService',
        );
        $this->app->bind(
            'App\Services\ICategoryService',
            'App\Services\CategoryService',
        );
        $this->app->bind(
            'App\Services\IPostService',
            'App\Services\PostService',
        );
        $this->app->bind(
            'App\Repositories\IAdminRepository',
            'App\Repositories\AdminRepository'
        );
        $this->app->bind(
            'App\Repositories\IPostRepository',
            'App\Repositories\PostRepository'
        );
        $this->app->bind(
            'App\Repositories\IProfessionRepository',
            'App\Repositories\ProfessionRepository'
        );
        $this->app->bind(
            'App\ViewModels\IStoreAlumniCommitteeModel',
            'App\ViewModels\StoreAlumniCommitteeModel'
        );
        $this->app->bind(
            'App\ViewModels\IViewAlumniCommitteeModel',
            'App\ViewModels\ViewAlumniCommitteeModel'
        );

        $this->app->bind(
            'App\Services\IAlumniCommitteeService',
            'App\Services\AlumniCommitteeService'
        );
        $this->app->bind(
            'App\Repositories\IAlumniCommitteeRepository',
            'App\Repositories\AlumniCommitteeRepository'
        );
        $this->app->bind(
            'App\Repositories\ICategoryRepository',
            'App\Repositories\CategoryRepository'
        );
        $this->app->bind(
            'App\ViewModels\IStoreCategoryModel',
            'App\ViewModels\StoreCategoryModel'
        );
        $this->app->bind(
            'App\ViewModels\IViewCategoryModel',
            'App\ViewModels\ViewCategoryModel'
        );
        $this->app->bind(
            'App\ViewModels\IStoreSliderModel',
            'App\ViewModels\StoreSliderModel'
        );
        $this->app->bind(
            'App\ViewModels\IStorePostModel',
            'App\ViewModels\StorePostModel'
        );
        $this->app->bind(
            'App\ViewModels\IViewSliderModel',
            'App\ViewModels\ViewSliderModel'
        );
        $this->app->bind(
            'App\BusinessObjects\ISlider',
            'App\BusinessObjects\Slider',
            
        );
        $this->app->bind(
            'App\Repositories\IBatchRepository',
            'App\Repositories\BatchRepository'
        );




    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {

        view()->composer('generalMember.partials.navbar',function($view)
        {
            $alumniMainRepository=resolve('App\Repositories\IAlumniMainRepository');
            $generalMembers=$alumniMainRepository->getRegisteredGeneralMemberBatch();
            $view->with('generalMembers',$generalMembers);
        });

        Schema::defaultStringLength(191);
    }
}
