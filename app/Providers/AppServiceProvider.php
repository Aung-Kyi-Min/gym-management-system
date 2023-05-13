<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        // Dao Registration
        $this->app->bind('App\Contracts\Dao\UserDaoInterface', 'App\Dao\UserDao');
        $this->app->bind('App\Contracts\Dao\Admin\AdminDaoInterface', 'App\Dao\Admin\AdminDao');
        $this->app->bind('App\Contracts\Dao\Admin\WorkoutDaoInterface', 'App\Dao\Admin\WorkoutDao');
        $this->app->bind('App\Contracts\Dao\Admin\InstructorDaoInterface', 'App\Dao\Admin\InstructorDao');
        
       

        // Business logic registration
        $this->app->bind('App\Contracts\Services\UserServiceInterface', 'App\Services\UserService');
        $this->app->bind('App\Contracts\Services\Admin\AdminServiceInterface', 'App\Services\Admin\AdminService');
        $this->app->bind('App\Contracts\Services\Admin\WorkoutServiceInterface', 'App\Services\Admin\WorkoutService');
        $this->app->bind('App\Contracts\Services\Admin\InstructorServiceInterface', 'App\Services\Admin\InstructorService');

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
