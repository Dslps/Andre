<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FlooringController;
use App\Http\Controllers\HandymanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaintingController;
use App\Http\Controllers\PlumbingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HandymanController::class, 'index'])->name('handyman');
Route::get('/plumbing', [PlumbingController::class ,'index'])->name('plumbing');
Route::get('/painting', [PaintingController::class ,'index'])->name('painting');
Route::get('/flooting', [FlooringController::class, 'index'])->name('flooring');

Route::get('dashboard', ([DashboardController::class, 'index']))->middleware('auth')->name('dashboard');

Route::get('/admin', [LoginController::class, 'index'])->name('login');
Route::post('/admin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

