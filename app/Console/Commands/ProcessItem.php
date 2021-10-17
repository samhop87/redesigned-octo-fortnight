<?php

namespace App\Console\Commands;

use App\Events\ItemProcessed;
use App\Models\ProcessableItem;
use App\Models\User;
use Illuminate\Console\Command;

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
        $item = ProcessableItem::factory()->create();
        // Just for testing
        $this->info('testing');
        broadcast(new ItemProcessed(ProcessableItem::find($item->id), User::find(1)));
        $this->info('fired');
    }
}
