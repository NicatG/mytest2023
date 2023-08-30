<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UserIdProviderService extends ServiceProvider
{
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
    public function boot(): void
    {
        //config(['userid'=>$userid=auth()->id()]);
        if (auth()->check()) {
            $globalUserID = auth()->id();
            config(['global.variable'=>$globalUserID]);
        }
        
    }
}
