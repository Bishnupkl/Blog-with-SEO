<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $repositories = ['Company',
            ];
        foreach ($repositories as $repository) {
            $this->app->bind(
                "App\\Http\\Interfaces\\{$repository}RepositoryInterface",
                "App\\Http\\Repositories\\{$repository}Repository"
            );
        }
    }
}
