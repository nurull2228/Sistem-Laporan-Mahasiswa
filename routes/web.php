<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

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
    return "Sistem Laporan Masalah - Teknik Informatika";
});

Route::get('/daftar', function () {
    return "Daftar masalah";
});

Route::get('/daftar-masalah', function () {
    return "List Daftar Masalah";
});

Route::get('/laporan', [LaporanController::class, 'index']);


Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('dosen', DosenController::class);