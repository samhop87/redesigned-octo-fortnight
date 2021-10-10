<?php

namespace App\Events;

use App\Models\ProcessableItem;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ItemProcessed implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var ProcessableItem
     */
    public $item;
    /**
     * @var User
     */
    private $user;

    /**
     * Create a new event instance.
     *
     * @param ProcessableItem $item
     * @param User $user
     */
    public function __construct(ProcessableItem $item, User $user)
    {
        $this->item = $item;
        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel("item-processed-channel-{$this->user->id}");
    }

    /**
     * Get the data to broadcast.
     *
     * @return array
     */
    public function broadcastWith()
    {
        return [
            'user_id' => $this->user->id,
            'item' => $this->item,
        ];
    }
}
