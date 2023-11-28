<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Person\IndexController as PersonIndexController;
use App\Http\Controllers\Person\StoreController as PersonStoreController;
use App\Http\Controllers\Person\ShowController as PersonShowController;
use App\Http\Controllers\Person\UpdateController as PersonUpdateController;
use App\Http\Controllers\Person\DeleteController as PersonDeleteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('people')->group(function () {
    Route::get('/', PersonIndexController::class);
    Route::post('/', PersonStoreController::class);
    Route::get('/{person}', PersonShowController::class);
    Route::patch('/{person}', PersonUpdateController::class);
    Route::delete('/{person}', PersonDeleteController::class);
});
