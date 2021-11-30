<?php

use App\Http\Controllers\WeightEntryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Weight Routes
|--------------------------------------------------------------------------
*/

Route::name('weight.')->prefix('weight')->group(function () {
    Route::get('/index', [WeightEntryController::class, 'index'])->name('index');
    Route::post('/store', [WeightEntryController::class, 'store'])->name('store');
});
