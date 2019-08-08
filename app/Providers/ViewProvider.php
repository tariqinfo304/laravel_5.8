<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         // Using class based composers...
        
        View::composer(
            '*', 'App\Http\View\Composers\ProfileComposer'
        );
        
        // Using class based composers...
        View::composer(
            'blade_lect_1_child', 'App\Http\View\Composers\ProfileComposer'
        );

    }
}
