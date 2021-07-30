<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'       => $this->id,
            'name'     => $this->name,
            'image'    => $this->image_url,
            'type'     => $this->type,
            'detail'   => $this->detail,
            'severity' => $this->severity,
            'choices'  => $this->resource->choices,
            'outcomes' => $this->resource->choices->map(function ($choice) {
                // This needs to change - but how to pass the luck score?
                return new OutcomeResource($choice->outcome);
            })
        ];
    }
}
