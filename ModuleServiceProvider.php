<?php

namespace MelisPlatformFrameworkLaravelDemoToolLogic;

use Illuminate\Support\ServiceProvider;
use MelisPlatformFrameworkLaravelDemoToolLogic\Providers\RouteServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Booting the package.
     */
    public function boot()
    {
        $this->registerViews();
        $this->registerTranslations();
    }

    /**
     * Register all modules.
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $this->loadViewsFrom(__DIR__.'/Resources/views', 'laravelDemoTool');
    }

    public function registerTranslations()
    {
        $this->loadTranslationsFrom(__DIR__.'/Resources/lang', 'laravelDemoTool');
    }
}
