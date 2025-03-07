<?php

use App\Http\Controllers\DapurController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DapurController::class, 'index'])->name('home');

Route::get('/menu', [DapurController::class, 'menu'])->name('menu');
Route::get('/catering', [DapurController::class, 'catering'])->name('catering');
Route::get('/kontak', [DapurController::class, 'kontak'])->name('kontak');
