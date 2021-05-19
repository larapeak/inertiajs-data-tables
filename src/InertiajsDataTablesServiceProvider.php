<?php

namespace Larapeak\InertiajsDataTables;

use Larapeak\InertiajsDataTables\Commands\InertiajsDataTablesCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasConfigFile();
    }

    public function bootingPackage()
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'./../stubs/DataTable.vue' => resource_path('js/Shared/DataTables/DataTable.vue'),
            __DIR__.'./../stubs/Body.vue' => resource_path('js/Shared/DataTables/Body.vue'),
            __DIR__.'./../stubs/Loading.vue' => resource_path('js/Shared/DataTables/Loading.vue'),
        ], 'assets');
    }
}
