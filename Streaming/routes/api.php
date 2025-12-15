<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'Login']);
Route::middleware(['auth:sanctum','user.middleware'])->group(function () {
    Route::apiResource('/users', App\Http\Controllers\UserController::class);
    Route::apiResource('/animes', App\Http\Controllers\AnimeController::class);
    Route::apiResource('/documentarios', App\Http\Controllers\DocumentarioController::class);
    Route::apiResource('/filmes', App\Http\Controllers\FilmeController::class);
    Route::apiResource('/series', App\Http\Controllers\SerieController::class);
});
