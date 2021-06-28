<?php

namespace Sohel1999\Laravelsslcommerz\Commands;

use Illuminate\Console\Command;

class LaravelsslcommerzCommand extends Command
{
    public $signature = 'laravelsslcommerz';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
