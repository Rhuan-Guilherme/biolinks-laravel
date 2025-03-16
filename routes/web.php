<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Links\LinksController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', fn() => 'dahsboard :: ' . auth()->id())
        ->middleware('auth')
        ->name('dashboard');

    Route::get('/logout', LogoutController::class)->name('logout');

    Route::get('/link/create', [LinksController::class, 'index'])->name('link.create');
    Route::post('/link/create', [LinksController::class, 'create']);

});


