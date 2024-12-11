<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\UnauthMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::post('/blog', [BlogController::class, 'store']);
    Route::delete('/blog/{id}', [BlogController::class, 'destroy']);
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit']);
    Route::put('/blog/{id}', [BlogController::class, 'update']);
    Route::get('/about', [BlogController::class, 'about']);
    Route::put('/likes/{id}', [BlogController::class, 'likes']);
    Route::get('/profile', [UserController::class, 'profile']);
    Route::post('/logout', [UserController::class, 'logout']);
});



Route::middleware([UnauthMiddleware::class])->group(function () {
    Route::get('/login', [UserController::class, 'loginPage']);
    Route::post('/login', [UserController::class, 'login']);
    Route::get('/register', [UserController::class, 'registerPage']);
    Route::post('/register', [UserController::class, 'register']);
});
