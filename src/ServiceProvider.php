<?php

namespace LaravelReady\FortifyUi;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

use LaravelReady\FortifyUi\Services\FortifyUiService;

final class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap of package services
     *
     * @return void
     */
    public function boot(Router $router): void
    {
        $this->bootPublishes();

        // register view namespaces
        $this->app['view']->addNamespace('fortify-ui', __DIR__ . '/../resources/views');

        // register package language files
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'fortify-ui');
    }

    /**
     * Register any application services
     *
     * @return void
     */
    public function register(): void
    {
        // package config file
        $this->mergeConfigFrom(__DIR__ . '/../config/fortify-ui.php', 'fortify-ui');

        // register package service
        $this->app->singleton('fortify-ui', function () {
            return new FortifyUiService();
        });
    }

    /**
     * Publishes resources on boot
     *
     * @return void
     */
    private function bootPublishes(): void
    {
        // package configs
        $this->publishes([
            __DIR__ . '/../config/fortify-ui.php' => $this->app->configPath('fortify-ui.php'),
        ], 'fortify-ui-config');

        // assets
        $this->publishes([
            __DIR__ . '/../resources' => resource_path('vendor/fortify-ui'),
        ], 'fortify-ui-assets');

        // views
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/fortify-ui'),
        ], 'fortify-ui-views');

        // language files
        $this->publishes([
            __DIR__ . '/../lang' => resource_path('lang/vendor/fortify-ui'),
        ], 'fortify-ui-lang');
    }
}
