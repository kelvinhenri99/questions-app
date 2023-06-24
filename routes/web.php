<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/question', [AuthController::class, 'question'])->name('question');
Route::get('/analysis', [AuthController::class, 'analysis'])->name('analysis');
