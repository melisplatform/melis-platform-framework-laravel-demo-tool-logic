<?php

namespace MelisPlatformFrameworkLaravelDemoToolLogic\Providers;

use Illuminate\Support\ServiceProvider;
use Collective\Html\HtmlServiceProvider;


class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Register all modules.
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->app->register(HtmlServiceProvider::class);
    }

    /**
     * Booting the package.
     */
    public function boot()
    {
        $this->registerViews();
        $this->registerTranslations();
        $this->addConfig();
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'laravelDemoTool');
    }

    /**
     * Register language path
     */
    public function registerTranslations()
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/lang', 'laravelDemoTool');
    }


    /**
     * Adding custom data to config
     */
    public function addConfig()
    {
        config([
            'data-table-config' => require __DIR__ . '/../Config/table.config.php'
        ]);
    }
}
