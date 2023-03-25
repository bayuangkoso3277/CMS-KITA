<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Antrian\AntrianController;
use App\Http\Controllers\Loket\LoketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pendaftaran/index');
});
Route::controller(AntrianController::class)->group(function () {
    Route::get('/antrian', 'index');
    Route::get('/antrian/print', 'print');
});
Route::get('/loket', [LoketController::class, 'index']);
