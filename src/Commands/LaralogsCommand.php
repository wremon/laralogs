<?php

namespace Wremon\Laralogs\Commands;

use Illuminate\Console\Command;

class LaralogsCommand extends Command
{
    public $signature = 'laralogs';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
