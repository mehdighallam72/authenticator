<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthenticatorController;


// Home
Route::get('/', [HomeController::class, 'home'])->name('home');

Route::middleware('auth')->group(function () {

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Dashboard
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // Authenticator
    Route::resource('authenticators', AuthenticatorController::class);
});

require __DIR__ . '/auth.php';
