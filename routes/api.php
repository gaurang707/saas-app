<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// No need for 'api' middleware here
Route::get('/test', function () {
    return response()->json(['status' => 'ok']);
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    
    Route::get('/me', function (Request $request) {
        return $request->user();
    });

    Route::get('/user/{id}', [UserController::class, 'show']);

    Route::get('/users', [UserController::class, 'index']);
});