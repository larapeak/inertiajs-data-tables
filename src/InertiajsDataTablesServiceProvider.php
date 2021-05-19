<?php

namespace Larapeak\InertiajsDataTables;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Larapeak\InertiajsDataTables\Commands\InertiajsDataTablesCommand;

class InertiajsDataTablesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('inertiajs-data-tables')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_inertiajs-data-tables_table')
            ->hasCommand(InertiajsDataTablesCommand::class);
    }
}
