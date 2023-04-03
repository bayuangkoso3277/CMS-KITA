<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Antrian\AntrianController;
use App\Http\Controllers\Loket\LoketController;
use App\Http\Controllers\RekamMedis\RekamMedisController;
use App\Http\Controllers\Poli\PoliController;
use App\Http\Controllers\login\LoginController;

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
    Route::post('/antrian','store');
});
Route::controller(RekamMedisController::class)->group(function () {
    Route::get('/rekam-medis', 'index');
    Route::get('/rekam-medis/cari', 'cari');
    Route::get('/rekam-medis/input', 'input');
    Route::get('/rekam-medis/detail', 'detail');
});
Route::get('/loket', [LoketController::class, 'index']);
Route::get('/loket/pasien_lama', [LoketController::class, 'pasien_lama']);
Route::get('/loket/pasien_baru', [LoketController::class, 'pasien_baru']);

Route::get('/login', [LoginController::class, 'index']);

Route::controller(PoliController::class)->group(function () {
    Route::get('/poli', 'index');
    Route::get('/poli/antri', 'view');
}); 