<?php

namespace Larapeak\InertiajsDataTables\Commands;

use Illuminate\Console\Command;

class InertiajsDataTablesCommand extends Command
{
    public $signature = 'inertiajs-data-tables';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
