<?php

namespace App\Console\Commands;

use App\Services\Spatie\CustomSpatieCrawlObserver;
use App\Services\Spatie\CustomUri;
use Illuminate\Console\Command;
use Spatie\Crawler\Crawler;

class Spatie extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:spatie {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run Spatie';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $url = (string)$this->argument('url');

        Crawler::create()
            ->ignoreRobots()
            ->setCrawlObserver([new CustomSpatieCrawlObserver])
            ->startCrawling($url);
    }
}
