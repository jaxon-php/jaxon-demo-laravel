<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route to demo page
Route::get('/', [DemoController::class, 'index'])->name('demo')->middleware('web');

// Route to Jaxon request processor
Route::post('/jaxon', function() {
    return response()->json([]); // This is not supposed to be executed.
})->middleware(['web', 'jaxon.ajax'])->name('jaxon');
