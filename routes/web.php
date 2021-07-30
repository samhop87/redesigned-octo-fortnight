<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('sites.technical-beatnik');
});

Route::get('/idiot-survival', function () {
    return view('sites.idiot-survival');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Vue Capture callback required for Vue Router
|--------------------------------------------------------------------------
*/
Route::get('/{vue_capture?}', function () {
    return view('layouts.app');
})->where('vue_capture', '^(?!storage).*$');
