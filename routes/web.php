<?php

use App\Http\Controllers\ConsumerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SellerController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/consumer', [ConsumerController::class, 'ConsumerPage'])->name('consumer');

Route::get('/seller', [SellerController::class, 'SellerPage'])->name('seller');