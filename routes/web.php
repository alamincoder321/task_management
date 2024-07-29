<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


// Login page
Route::get('/', [LoginController::class, 'showUserLoginForm'])->name('user.login.show');
Route::post('/login', [LoginController::class, 'login'])->name('user.login');
Route::get('/logout', [DashboardController::class, 'Logout'])->middleware('auth')->name('user.logout');


//dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
