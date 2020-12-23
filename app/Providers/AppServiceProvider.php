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
        view()->composer('home', function($view){
            //get all parent categories with their subcategories
            $categories = \App\Models\Catogory::where('parent_id', 0)->with('subcategories')->get();
            //attach the categories to the view.     
            $view->with(compact('categories'));
        });
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
