<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
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
        view()->composer('layouts.master', function ($view) {
            $category = Category::all();
            $view->with('category', $category);
        });

        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}