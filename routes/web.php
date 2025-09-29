<?php

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
    return "Sistem Pelaporan Masalah - Teknik Informatika";
});

Route::get('/daftar', function () {
    return "Daftar masalah";
});

Route::get('/daftar-masalah', function () {
    return "List Daftar Masalah";
});
