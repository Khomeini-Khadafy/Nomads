<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\DetailController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/details', [DetailController::class, 'index'])->name('details');

Route::prefix('admin')->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });