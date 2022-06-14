<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class CheckCointiplyRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:cointiply-rates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks cointiply upgrade rates and notifies me';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // https://cointiply.com/api/arena/38193/upgrade (POST)

        // need to see if login works
        // need to see if we need a new id per user or per hero
        // need to see if we can grab the 'level up' post route

        $response = Http::withHeaders([
            'authorization' => 'Bearer Xs2AMvQhYqvLqHlOv7kiOeZ9C9J03fHELKXOnZ5pp9KcmXwXhoNZThVRyGOk'
        ])->get('https://cointiply.com/api/arena/rates');

        if ($response->collect('status')->first() == 'success') {
            if ($response->collect('rates.min_rate_current')->first() > 45) {
                dd('hit'); // notify
            }
        } else {
            // bearer token needs refreshing. can we log in remotely as well, and grab the new bearer token from the response?
        }
    }
}
