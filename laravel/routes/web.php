<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Antrian\AntrianController;
use App\Http\Controllers\Loket\LoketController;
use App\Http\Controllers\Poli\PoliController;

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
Route::get('/antrian', [AntrianController::class, 'index']);
Route::get('/loket', [LoketController::class, 'index']);
Route::get('/loket/pasien_lama', [LoketController::class, 'pasien_lama']);
Route::get('/loket/pasien_baru', [LoketController::class, 'pasien_baru']);
Route::get('/poli', [PoliController::class, 'index']);
