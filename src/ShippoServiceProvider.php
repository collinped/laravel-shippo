<?php

namespace Collinped\Shippo;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Collinped\Shippo\Commands\ShippoCommand;

class ShippoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-shippo')
            ->hasConfigFile();
            //->hasViews()
            //->hasMigration('create_laravel-shippo_table')
            //->hasCommand(ShippoCommand::class);
    }
}
