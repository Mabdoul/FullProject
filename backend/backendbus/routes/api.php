<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookingController;

Route::post('/checkout', [BookingController::class, 'store']);
