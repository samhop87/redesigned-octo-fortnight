<?php

namespace App\Console\Commands;

use App\Events\ItemProcessed;
use App\Models\User;
use Database\Factories\ProcessableItemFactory;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;

class ProcessItem extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'process:item';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates Process Items';

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
        $item = (new ProcessableItemFactory)->create();
        // Just for testing
        broadcast(new ItemProcessed($item, User::find(1)));
    }
}
