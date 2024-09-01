<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\manajerController;

Route::get('/', function () {
    return view('auth.login');
});

// Guest
Route::get('/register', [UserRegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [UserRegisterController::class, 'register'])->name('register.process');
Route::get('/login', [UserLoginController::class, 'showLogin'])->name('login.view');
Route::post('/login', [UserLoginController::class, 'loginauth'])->name('login.process');
// end Guest


// Karyawan
Route::middleware(['karyawan'])->group(function () {
    Route::get('/dashboard/karyawan', [KaryawanController::class, 'index'])->name('dashboard.karyawan');
    Route::get('/dashboard/karyawan/status', [KaryawanController::class, 'showstatus'])->name('karyawan.status');
    Route::get('/logout', [KaryawanController::class, 'logout'])->name('logout');
    Route::post('/dashboard/karyawan', [KaryawanController::class, 'addlembur'])->name('karyawan.store');
});
// End Karyawan


// Manajer
Route::middleware(['manajer'])->group(function () {
    Route::get('/dashboard/manajer', [manajerController::class, 'index'])->name('dashboard.manajer');
    Route::get('/logout/manajer', [manajerController::class, 'logout'])->name('logout.manajer');
    Route::put('/dashboard/manajer/status/{id}', [ManajerController::class, 'updateStatus'])->name('manajer.updateStatus');
});
// end Manajer