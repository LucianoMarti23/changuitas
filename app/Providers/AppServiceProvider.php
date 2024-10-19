<?php

namespace App\Providers;

use App\Services\Contracts\JobCategoryServiceInterface;
use App\Services\Implementations\JobCategoryServiceImpl;
use Illuminate\Support\ServiceProvider;
use App\Services\Implementations\AuthServiceImpl;   
use App\Services\Contracts\AuthServiceInterface;
use App\Services\Contracts\UserProfileServiceInterface;
use App\Services\Implementations\UserProfileServiceImpl;
use App\Services\Contracts\JobServiceInterface;
use App\Services\Implementations\JobServiceImpl;

class AppServiceProvider extends ServiceProvider

{
    /**
     * Register any application services.
     */
    public function register(){
    
        
        $this->app->bind(AuthServiceInterface::class, AuthServiceImpl::class);

        $this->app->bind(UserProfileServiceInterface::class, UserProfileServiceImpl::class);

        $this->app->bind(JobServiceInterface::class, JobServiceImpl::class);

        $this->app->bind(JobCategoryServiceInterface::class , JobCategoryServiceImpl::class);

        $this->app->bind(
            \App\Services\Contracts\UserServiceInterface::class,
            \App\Services\Implementations\UserServiceImpl::class
            
        );
        $this->app->bind(
            \App\Services\Contracts\SubscriptionsServiceInterface::class,
            \App\Services\Implementations\SubscriptionsServiceImpl::class
            
        );
    
    
    }
}  
