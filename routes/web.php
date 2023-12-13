<?php

use App\Http\Controllers\ControllerCatatanKhusus;
use App\Http\Controllers\ControllerDisabilitas;
use App\Http\Controllers\ControllerKeluarga;
use App\Http\Controllers\ControllerLaporanSensus;
use App\Http\Controllers\ControllerMobilitas;
use App\Http\Controllers\ControllerPekerjaan;
use App\Http\Controllers\ControllerPenduduk;
use App\Http\Controllers\ControllerWilayah;
use Illuminate\Support\Facades\Route;

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
    return view('pages.dashboard');
});

Route::get('/penduduk', [ControllerPenduduk::class, 'show']);
Route::post('/penduduk', [ControllerPenduduk::class, 'showSearch']);

Route::get('/keluarga', [ControllerKeluarga::class, 'show']);

Route::get('/wilayah', [ControllerWilayah::class, 'show']);
Route::get('/laporan-sensus', [ControllerLaporanSensus::class, 'show']);
Route::get('/catatan-khusus', [ControllerCatatanKhusus::class, 'show']);
Route::get('/disabilitas', [ControllerDisabilitas::class, 'show']);

Route::prefix("/mobilitas")->group(function () {
    Route::get('/transmigrasi', [ControllerMobilitas::class, 'showTransmigrasi']);
    Route::get('/imigrasi', [ControllerMobilitas::class, 'showImigrasi']);
    Route::get('/emigrasi', [ControllerMobilitas::class, 'showEmigrasi']);
});

Route::prefix("/pekerjaan")->group(function () {
    Route::get('/asn', [ControllerPekerjaan::class, 'showAsn']);
    Route::get('/swasta', [ControllerPekerjaan::class, 'showSwasta']);
});
