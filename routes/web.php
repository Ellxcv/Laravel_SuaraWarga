<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PetisiController;
use App\Http\Controllers\KeluhanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('petisi', PetisiController::class)->except(['show']);
Route::get('petisi/print', [PetisiController::class, 'print'])->name('petisi.print');

Route::resource('keluhan', KeluhanController::class);