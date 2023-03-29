<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Antrian\AntrianController;
use App\Http\Controllers\Loket\LoketController;
use App\Http\Controllers\Api\ApiController;
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
Route::controller(AntrianController::class)->group(function () {
    Route::get('/antrian', 'getAntrian');
});
Route::controller(LoketController::class)->group(function () {
    Route::any('/getLoketAntrian', 'getLoketAntrian');
});

Route::controller(ApiController::class)->group(function () {
    Route::post('/updateAntrian', 'updateAntrian');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
