<?php

namespace App\Providers;

use App\Models\BasicInformationForSite;
use App\Models\User;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view) {
            $view->with('data',BasicInformationForSite::all());
            $view->with('user_count',User::count());
        });
    }
}
