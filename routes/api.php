<?php

use App\Http\Controllers\BusinessHoursController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/business-hours', [BusinessHoursController::class, 'index']);
    Route::put('/business-hours/update/{business_hour}', [BusinessHoursController::class, 'update']);
});

Route::get('/home', [HomeController::class, 'index']);
