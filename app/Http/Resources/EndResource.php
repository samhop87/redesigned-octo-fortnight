<?php

namespace App\Http\Resources;

use App\Models\GameEvent;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EndResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // @todo: think about how to change this to log high scores
        return [
            'name'     => 'THE END',
            'type'     => 'game_over',
            'details'  => GameEvent::whereIn('id', json_decode($request->pastEvents))->get()->map(function ($ind) {
                return $ind->name;
            })
        ];
    }
}
