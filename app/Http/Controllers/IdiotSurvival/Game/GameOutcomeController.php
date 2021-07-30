<?php

namespace App\Http\Controllers\IdiotSurvival\Game;

use App\Http\Controllers\Controller;

class GameOutcomeController extends Controller
{
    public function index() {
        // TODO: Calculate the success of a choice and return one of two outcomes - pos / neg.
        // Currently there is only one outcome to each choice.
        // Calculate outcome
        // This should be a method on the model - it gets the luck score, and calculates the pos or neg outcome, gives it back.
    }
}
