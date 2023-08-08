<?php
namespace App\Console\Commands;
use App\Jobs\ScrapeMoviesJob;
use Illuminate\Console\Command;

class ScrapeMovies extends Command
{
    protected $signature = 'scrape:movies';
    protected $description = 'Scrape movies from IMDb and save to database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        try {
            dispatch(new ScrapeMoviesJob);

            $this->info('Scraping job dispatched successfully.');
        } catch (\Exception $e) {
            $this->error('An error occurred: ' . $e->getMessage());
        }
    }
}
