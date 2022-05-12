<?php

namespace Collinped\Shippo\Commands;

use Illuminate\Console\Command;

class ShippoCommand extends Command
{
    public $signature = 'laravel-shippo';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
