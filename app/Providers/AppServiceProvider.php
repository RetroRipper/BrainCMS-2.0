<?php

namespace App\Providers;

use App\Models\Website\Articles;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('components.news', function () {
            $news = Articles::orderBy('id', 'DESC')->get();
            view()->share('news', $news);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
