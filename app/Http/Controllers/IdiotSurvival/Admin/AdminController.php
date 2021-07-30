<?php

namespace App\Http\Controllers\IdiotSurvival\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\Choice;
use App\Http\Models\Event;
use App\Http\Models\Outcome;
use App\Models\GameChoice;
use App\Models\GameEvent;
use App\Models\GameOutcome;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function store()
    {
        $event = request();

        DB::transaction(function () use ($event) {
            $newEvent = GameEvent::firstOrCreate([
                'name'              => $event->name,
                'keyword_for_image' => $event->keyword_for_image,
                'type'              => $event->type,
                'detail'            => $event->detail,
                'severity'          => $event->severity
            ]);

            foreach ($event->decision as $key => $decision) {
                $choice = GameChoice::firstOrCreate([
                    'event_id' => $newEvent->id,
                    'choice_type' => $key
                ], [
                    'event_id' => $newEvent->id,
                    'choice_type' => $key,
                    'details' => $decision['choice']
                ]);

                GameOutcome::firstOrCreate([
                    'event_choice_id' => $choice->id,
                    'health_effect' => $decision['outcome']['health_effect'],
                    'luck_effect' => $decision['outcome']['luck_effect'],
                    'info' => $decision['outcome']['text']
                ]);
            }
        });

        return response()->json([
            'message' => 'Event has created successfully',
        ], 201);
    }

    /**
     * @return array
     */
    public function getEvents()
    {
        // Reformatting the event types to be stages.
        // @todo: make this change part of the game flow, rather than the returned events
        $eventStages = [
            GameEvent::FIRST_STEPS,
            GameEvent::EXPLORING,
            GameEvent::LEARNING,
            GameEvent::FIGHTING_FOR_SURVIVAL,
            GameEvent::GETTING_STRONGER,
            GameEvent::CONTINUING_TO_SURVIVE
        ];

        return $eventStages;
    }
}
