<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rota para exibir o perfil público de um atleta
Route::get('/atletas/{user}', function (User $user) {
    $user->load('athleteProfile');

    return view('pages.athlete.show', ['user' => $user]);
})->name('athletes.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
