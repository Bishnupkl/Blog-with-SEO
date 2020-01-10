<?php

namespace App\Providers;

use App\Blog;
use Illuminate\Support\ServiceProvider;
use View;

class ComposerSerweviceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view::composer(['partials.meta_dynamic','layouts.nav'], function ($view) {
            $view->with('blogs', Blog::all());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
