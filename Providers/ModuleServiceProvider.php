<?php

namespace MelisPlatformFrameworkLaravelDemoToolLogic\Providers;

use Illuminate\Support\ServiceProvider;
use MelisPlatformFrameworkLaravelDemoToolLogic\Helper\DataTableHelper;
use MelisPlatformFrameworkLaravelDemoToolLogic\Providers\RouteServiceProvider;
use Collective\Html\HtmlServiceProvider;
use Collective\Html\FormFacade As Form;
use Collective\Html\HtmlFacade;

class ModuleServiceProvider extends ServiceProvider
{
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
        $loader->alias('DataTable', DataTableHelper::class);
    }

    /**
     * Booting the package.
     */
    public function boot()
    {
        $this->registerViews();
        $this->registerTranslations();
        $this->registerViewHelper();
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
     * Register form view helper
     */
    public function registerViewHelper()
    {
        Form::component('bsText', 'laravelDemoTool::form.text', ['name', 'label' => null, 'tooltip' => null, 'attributes' => [], 'value' => null]);
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
