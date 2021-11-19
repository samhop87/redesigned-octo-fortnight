<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WeightResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'weight_in_grams' => $this->weight_in_grams,
            'weight_in_kilos' => number_format($this->weight_in_grams / 1000, 2, '.'),
            'date_taken' => $this->created_at->format('d/m/Y'),
            'data_object' => [
                'x' => $this->created_at->format('d/m/Y'),
                'y' => number_format($this->weight_in_grams / 1000, 2, '.'),
            ]
        ];
    }
}
