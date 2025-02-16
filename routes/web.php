<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/welcome', [AuthController::class, 'tampilWelcome'])->name('welcome.tampil');

Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');

Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');
Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');