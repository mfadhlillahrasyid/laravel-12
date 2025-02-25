<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/account', [LandingController::class, 'account'])->name('landing.account');
