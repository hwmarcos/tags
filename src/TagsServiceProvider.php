<?php

namespace Hwmarcos\Tags;

use Illuminate\Support\ServiceProvider;

class TagsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'tags');

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/hwmarcos/tags'),
        ]);

        $this->publishes([
            __DIR__ . '/migrations' => database_path('migrations/')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include_once(__DIR__ . '/routes.php');
        $this->app->make('Hwmarcos\Tags\Controllers\TagController');
    }
}
