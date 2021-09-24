<?php

namespace Wremon\Laralogs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wremon\Laralogs\Commands\LaralogsCommand;
use Wremon\Laralogs\Models\Log;

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

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        //$this->app->bind('\Wremon\Laralogs\Providers\AuthServiceProvider');

//        Log::create([
//            'user_id' => 1,
//'user' => 'test',
//'detail' => 'Login',
//'ip_address' => '127.0.0.1',
//        ]);
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
