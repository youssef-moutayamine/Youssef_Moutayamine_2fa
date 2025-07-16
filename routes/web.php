<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TwoFactorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/2fa/enable', [TwoFactorController::class, 'enable'])->name('2fa.enable')->middleware('auth');
Route::get('/2fa/verify', [TwoFactorController::class, 'showVerifyForm'])->name('2fa.verify')->middleware('auth');
Route::post('/2fa/verify', [TwoFactorController::class, 'verify'])->name('2fa.verify.post')->middleware('auth');

require __DIR__.'/auth.php';
