<?php

use App\Http\Controllers\AthleteProfileController;
use App\Http\Controllers\PublicAthleteProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/athlete/{user}', [AthleteProfileController::class, 'show'])->name('athlete.profile.show');
Route::get('/athlete/profile/create', [AthleteProfileController::class, 'create'])->name('athlete.profile.create');
Route::post('/athlete/profile', [AthleteProfileController::class, 'store'])->name('athlete.profile.store');

Route::get('/atletas', [PublicAthleteProfileController::class, 'index'])->name('athlete.index');
Route::get('/atletas/{athlete}', [PublicAthleteProfileController::class, 'show'])->name('athlete.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
