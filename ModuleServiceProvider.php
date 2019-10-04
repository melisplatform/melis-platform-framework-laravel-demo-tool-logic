<?php

namespace MelisPlatformFrameworkLaravelDemoToolLogic;

use Illuminate\Support\ServiceProvider;
use MelisPlatformFrameworkLaravelDemoToolLogic\Providers\RouteServiceProvider;
use Collective\Html\HtmlServiceProvider;
use Collective\Html\FormFacade As Form;
use Collective\Html\HtmlFacade;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Booting the package.
     */
    public function boot()
    {
        $this->registerViews();
        $this->registerTranslations();

        Form::component('bsText', 'laravelDemoTool::text', ['name', 'label' => null, 'value' => null, 'attributes' => []]);
    }

    /**
     * Register all modules.
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->app->register(HtmlServiceProvider::class);

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Form', Form::class);
        $loader->alias('Html', HtmlFacade::class);
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
