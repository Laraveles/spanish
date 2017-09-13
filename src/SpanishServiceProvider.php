<?php

namespace Laraveles\Spanish;

use Illuminate\Support\ServiceProvider;

class SpanishServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
             __DIR__.'/../resources/lang' => resource_path('/lang'),
        ], 'lang');

        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\InstallLang::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
