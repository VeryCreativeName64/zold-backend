<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/activities', [ActivityController::class, 'index']);

Route::get('/activities/{id}', [ActivityController::class, 'show']);

Route::post('/activities', [ActivityController::class, 'store']);
