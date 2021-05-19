<?php

namespace Larapeak\InertiajsDataTables\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Larapeak\InertiajsDataTables\InertiajsDataTablesServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Larapeak\\InertiajsDataTables\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            InertiajsDataTablesServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_inertiajs-data-tables_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
