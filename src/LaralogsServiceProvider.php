<?php

namespace Wremon\Laralogs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wremon\Laralogs\Commands\LaralogsCommand;

class LaralogsServiceProvider extends PackageServiceProvider
{
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
