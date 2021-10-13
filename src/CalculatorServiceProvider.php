<?php

namespace DevDojo\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     * The register() function is used to bind our package to the classes inside the app container.
     * @return void
     */
    public function register()
    {
        // register our controller
        $this->app->make('Devdojo\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }

    /**
     * Bootstrap services.
     * The boot() function is used to initialize some routes or add an event listener.
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
