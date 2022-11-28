<?php

namespace Lanos\Blockie;

use Illuminate\Support\ServiceProvider;

/**
 * Service provider for the package.
 *
 * @package Lanos\Blockie\Providers
 */
class BlockchainGatewayServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->initializeMigrations();
        $this->initializePublishing();
        $this->initializeCommands();
        $this->setupConfig();
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/blockie.php', 'blockie'
        );
    }


    /**
     * Register the package migrations.
     *
     * @return void
     */
    protected function initializeMigrations()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        }
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function initializePublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../database/migrations' => $this->app->databasePath('migrations'),
            ], 'blockchain-payment-migrations');
        }
    }

    /**
     * Register the package's console commands.
     *
     * @return void
     */
    protected function initializeCommands()
    {
        if ($this->app->runningInConsole()) {

        }
    }

    /**
     * Register the package's config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $this->publishes([
            __DIR__ . '/../config/blockie.php' => config_path('blockie.php'),
        ]);
    }

}