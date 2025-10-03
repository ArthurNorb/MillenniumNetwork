<?php

use App\Http\Controllers\AthleteProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/athlete/{user}', [AthleteProfileController::class, 'show'])->name('athletes.show');
Route::get('/athlete/profile/create', [AthleteProfileController::class, 'create'])->name('athlete.profile.create');
Route::post('/athlete/profile', [AthleteProfileController::class, 'store'])->name('athlete.profile.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
