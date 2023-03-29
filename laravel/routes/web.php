<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Antrian\AntrianController;
use App\Http\Controllers\Loket\LoketController;
use App\Http\Controllers\RekamMedis\RekamMedisController;

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
    Route::any('/antrian', 'index');
    Route::get('/antrian/print/{id}', 'print');
});
Route::controller(RekamMedisController::class)->group(function () {
    Route::get('/rekam-medis', 'index');
});
Route::get('/loket', [LoketController::class, 'index']);
