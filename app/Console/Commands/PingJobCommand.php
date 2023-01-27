<?php

namespace App\Console\Commands;

use App\Jobs\PingJob;
use Illuminate\Console\Command;

class PingJobCommand extends Command
{
    protected $signature = 'ping:job';
    protected $description = 'Command description';

    public function handle(): int
    {
	    PingJob::dispatch();
        return 0;
    }
}
