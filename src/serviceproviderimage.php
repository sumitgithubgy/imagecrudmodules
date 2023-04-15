<?php

namespace Moduleimage\Path;

use Illuminate\Support\ServiceProvider;

class serviceproviderimage extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->make('Moduleimage\Path\imagecontroller');
        $this->loadViewsFrom(__DIR__.'/views','Path');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');



    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        include __DIR__.'/Route.php';
    }
}