<?php

use App\Http\Controllers\ConsumerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SystemMonitoringController;
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/consumer', [ConsumerController::class, 'ConsumerPage'])->name('consumer');

Route::get('/seller', [SellerController::class, 'SellerPage'])->name('seller');

Route::get('/transaction', [TransactionController::class, 'TransactionPage'])->name('transaction');

Route::get('/feedback', [FeedbackController::class, 'FeedbackPage'])->name('feedback');

Route::get('/profile', [ProfileController::class, 'ProfilePage'])->name('profile');

Route::get('/systemmonitoring', [SystemMonitoringController::class, 'SystemMonitoringPage'])->name('systemmonitoring');