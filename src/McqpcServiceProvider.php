<?php

namespace edgewizz\mcqpc;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class McqpcServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgewizz\Mcqpc\Controllers\McqpcController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd($this);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__ . '/components', 'mcqpc');
        Blade::component('mcqpc::mcqpc.open', 'mcqpc.open');
        Blade::component('mcqpc::mcqpc.index', 'mcqpc.index');
        Blade::component('mcqpc::mcqpc.edit', 'mcqpc.edit');
    }
}
