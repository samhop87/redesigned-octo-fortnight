<?php

namespace App\Http\Controllers\IdiotSurvival\Game;

use App\Http\Controllers\Controller;
use App\Http\Resources\EndResource;
use App\Http\Resources\EventResource;
use App\Models\GameEvent;

class GameEventController extends Controller
{
    /**
     * @return EndResource|EventResource
     */
    public function index()
    {
        $health  = request('health');
        $luck = request('luck');
        $pastEvents = json_decode(request('pastEvents'));

        // TODO: Rework severity functionality for apocalypse mode.
        // Luck will determine which outcome is returned with the event.

        // Retrieve event from remaining available events (or fire first event)
        $event = !empty($pastEvents) ? GameEvent::whereNotIn('id', $pastEvents)->first() : GameEvent::whereNotNull('name')->first();

        // If all events have been chosen or health is zero, end game.
        if (!$event || !$health) {
            return new EndResource($pastEvents);
        }

        return new EventResource($event);
    }
}
