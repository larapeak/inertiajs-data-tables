<?php

namespace Larapeak\InertiajsDataTables;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Larapeak\InertiajsDataTables\InertiajsDataTables
 */
class InertiajsDataTablesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'inertiajs-data-tables';
    }
}
