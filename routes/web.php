<?php

use App\Http\Controllers\GithubController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('auth/github',[GithubController::class,'redirectToGithub'])->name('github.page');
Route::get('auth/github/callback',[GithubController::class,'handleGithubCallback'])->name('github.redirect');