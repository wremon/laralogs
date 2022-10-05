<?php

namespace Wremon\Laralogs\Commands;

use Illuminate\Console\Command;

class LaralogsCommand extends Command
{
    public string $signature = 'laralogs';

    public string $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
