<?php

namespace Wremon\Laralogs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wremon\Laralogs\Commands\LaralogsCommand;

class LaralogsServiceProvider extends PackageServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishConfig();
        $this->publishMigrations();
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laralogs')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(LaralogsCommand::class);
    }

    /**
     * Publish package config file.
     */
    protected function publishConfig()
    {
        $path = __DIR__ . '/../config/laralogs.php';

        $this->publishes([$path => config_path('laralogs.php')], 'laravel-laralogs');

        $this->mergeConfigFrom($path, 'laralogs');
    }

    /**
     * Publish package migration files.
     */
    protected function publishMigrations()
    {
        if ($this->app->runningInConsole()) {
            if (! class_exists('CreateLaralogsTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_laralogs_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_laralogs_table.php'),
                ], 'laravel-laralogs');
            }
        }
    }
}
