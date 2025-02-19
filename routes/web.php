<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/welcome', function () {
    return view('welcome');
});


Route::middleware('guest')->group(function(){
  Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
  Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');
  Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login');
  Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
});


Route::middleware('auth')->group(function(){
  Route::get('/dashboard', [AuthController::class, 'tampilDashboard'])->name('dashboard.tampil');  
  Route::post('/logout', [AuthController::class, 'logout'])->name('logout');  
});