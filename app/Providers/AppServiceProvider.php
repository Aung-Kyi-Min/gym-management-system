<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        // Dao Registration
        $this->app->bind('App\Contracts\Dao\UserDaoInterface', 'App\Dao\UserDao');
        $this->app->bind('App\Contracts\Dao\AdminDaoInterface', 'App\Dao\AdminDao');
        $this->app->bind('App\Contracts\Dao\AuthDaoInterface', 'App\Dao\AuthDao');

        // Business logic registration
        $this->app->bind('App\Contracts\Services\UserServiceInterface', 'App\Services\UserService');
        $this->app->bind('App\Contracts\Services\AdminServiceInterface', 'App\Services\AdminService');
        $this->app->bind('App\Contracts\Services\AuthServiceInterface', 'App\Services\AuthService');

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
