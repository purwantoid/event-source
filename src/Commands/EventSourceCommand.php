<?php

declare(strict_types=1);

namespace PurwantoId\EventSource\Commands;

use Illuminate\Console\Command;

class EventSourceCommand extends Command
{
    public $signature = 'event-source';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
