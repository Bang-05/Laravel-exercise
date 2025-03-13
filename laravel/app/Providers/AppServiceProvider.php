<?php

namespace App\Providers;

use App\Models\TypeProducts;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('header', function ($view) {				
            $loai_sp = TypeProducts::all();				
            $view->with('loai_sp', $loai_sp);				
            });				
    }
}
