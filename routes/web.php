<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/* ================= AUTH ================= */

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/dashboard', function () {
    $user = auth()->user();

    if ($user->role === 'dpa') {
        $laporans = \App\Models\Laporan::latest()->paginate(10);
    } else {
        $laporans = \App\Models\Laporan::where('mahasiswa_id', $user->id)
            ->latest()
            ->paginate(10);
    }

    return view('dashboard', compact('laporans','user'));
})->middleware(['auth'])->name('dashboard');



/* ================= ROLE ================= */

// Mahasiswa
Route::middleware(['auth','role:mahasiswa'])->group(function(){
    Route::resource('laporan', LaporanController::class);
});

// DPA
Route::middleware(['auth','role:dpa'])->group(function(){
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('dosen', DosenController::class);
    Route::get('/admin/laporan', [LaporanController::class,'index'])
        ->name('admin.laporan.index');
});

require __DIR__.'/auth.php';
