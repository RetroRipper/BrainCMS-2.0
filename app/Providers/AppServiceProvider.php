<?php

namespace App\Providers;

use App\Models\Website\Articles;
use App\Models\Website\RandomUsers;
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

        view()->composer('components.randomusers', function () {
            $randomUsers = RandomUsers::inRandomOrder()->limit(10)->get();
            view()->share('randomUsers', $randomUsers);
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
