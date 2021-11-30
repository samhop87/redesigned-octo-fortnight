<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeightRequest;
use App\Http\Resources\WeightResource;
use App\Models\WeightEntry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class WeightEntryController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return WeightResource::collection(WeightEntry::all());
    }

    public function store(WeightRequest $request): JsonResponse
    {
        $entry = WeightEntry::create([
            'weight_in_grams' => $request->weight * 1000
        ]);

        return response()->json([
            'message' => 'Success!',
            'data' => new WeightResource($entry)
        ]);
    }
}
