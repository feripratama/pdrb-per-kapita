<?php namespace Bantenprov\PdrbPerKapita;

use Illuminate\Support\ServiceProvider;
use Bantenprov\PdrbPerKapita\Console\Commands\PdrbPerKapitaCommand;

/**
 * The PdrbPerKapitaServiceProvider class
 *
 * @package Bantenprov\PdrbPerKapita
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PdrbPerKapitaServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap handles
        $this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        $this->migrationHandle();
        $this->publicHandle();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('pdrb-per-kapita', function ($app) {
            return new PdrbPerKapita;
        });

        $this->app->singleton('command.pdrb-per-kapita', function ($app) {
            return new PdrbPerKapitaCommand;
        });

        $this->commands('command.pdrb-per-kapita');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'pdrb-per-kapita',
            'command.pdrb-per-kapita',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/config/config.php';
        $appConfigPath     = config_path('pdrb-per-kapita.php');

        $this->mergeConfigFrom($packageConfigPath, 'pdrb-per-kapita');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'pdrb-per-kapita');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/pdrb-per-kapita'),
        ], 'lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';

        $this->loadViewsFrom($packageViewsPath, 'pdrb-per-kapita');

        $this->publishes([
            $packageViewsPath => resource_path('views/vendor/pdrb-per-kapita'),
        ], 'views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/resources/assets';

        $this->publishes([
            $packageAssetsPath => resource_path('assets'),
        ], 'pdrb-assets');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/database/migrations';

        $this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'migrations');
    }

    public function publicHandle()
    {
        $packagePublicPath = __DIR__.'/public';

        $this->publishes([
            $packagePublicPath => base_path('public')
        ], 'pdrb-public');
    }
}
