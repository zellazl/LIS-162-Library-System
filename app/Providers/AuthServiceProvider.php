<?php

namespace App\Providers;

//use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPolicies(); // This registers the policies defined in the $policies array

        // Define any additional gates or policies here
        Gate::define('admin', function ($user) {
            return $user->role === 'admin'; // Example gate for admin access
        });
    }
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    //public function boot(): void
    //{
        //
    //}
}
