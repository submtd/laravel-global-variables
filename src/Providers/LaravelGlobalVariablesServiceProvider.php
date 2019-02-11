<?php

namespace Submtd\LaravelGlobalVariables\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelGlobalVariablesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // config
        $this->mergeConfigFrom(__DIR__ . '/../../config/laravel-global-variables.php', 'laravel-global-variables');
        $this->publishes([__DIR__ . '/../../config' => config_path()], 'config');
        // migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->publishes([__DIR__ . '/../../database' => database_path()], 'migrations');
    }
}
