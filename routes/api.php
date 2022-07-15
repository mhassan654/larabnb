<?php

use App\Models\Bookable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookablesController;
use App\Http\Controllers\Api\BookableAvailabilityController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('bookables', function(Request $request){
//     return Bookable::all();
// });
Route::resource('bookables', BookablesController::class);
Route::post('bookables/{bookable}/availability',BookableAvailabilityController::class)
->name('bookables.availability.show');
