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
        $this->publishes([
            __DIR__.'/../config/laralogs.php' => config_path('laralogs.php'),
        ]);

        if (config('laralogs.should_migrate')) {
            echo 'WM';
            $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        }
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
            ->hasMigration('create_laralogs_table')
            ->hasCommand(LaralogsCommand::class);
    }
}
