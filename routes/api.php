<?php

use App\Http\Controllers\Api\v1\AuctionController;
use App\Http\Controllers\Api\v1\ManufactureController;
use App\Http\Controllers\Api\v1\ModelController;
use App\Http\Controllers\Api\v1\VehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('v1')->group(function() {
    Route::get('local-stock', [VehicleController::class, 'index']);
    Route::get('local-stock/{id}', [VehicleController::class, 'details']);
    Route::get('local-models', [ModelController::class, 'index']);
    Route::get('local-manufactures', [ManufactureController::class, 'index']);

    Route::get('auction-list', [AuctionController::class, 'index']);
    Route::get('auction-list/{id}', [AuctionController::class, 'details']);
    Route::get('auction-manufactures', [AuctionController::class, 'manufactures']);
    Route::get('auction-models', [AuctionController::class, 'models']);
    Route::get('auction-years', [AuctionController::class, 'years']);
    Route::get('auction-chassisids', [AuctionController::class, 'chassisids']);
    Route::get('auction-capacity', [AuctionController::class, 'capacity']);
    Route::get('auction-dates', [AuctionController::class, 'dates']);
});
 
