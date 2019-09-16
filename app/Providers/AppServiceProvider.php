<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
//migration
use Illuminate\Support\Facades\Schema;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //for migration setting //
        Schema::defaultStringLength(191);
        //end //
        //use Illuminate\Support\Facades\Blade; 
        //it's necessary to add this at top of page 
        Blade::component("EVS.alert","alert");

        //its a way to make custom blade directive
        Blade::directive('string', function ($expression) {
            return "<?php echo 'custom Blade Drirective : '.$expression; ?>";
        });


        //sharing data to all vies
        View::share('key', 'shring value to all viws');

        //////////////////
        /// DB ////////////
        //it will run on very query for loging and debugging purpose
        DB::listen(function($query){

           // echo $query->sql;
           // echo "<br/>";
          // print_r($query->bindings);
            //  print_r( $query->time );
        });
    }
}
