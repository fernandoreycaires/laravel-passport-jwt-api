<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/v1/register', [AuthController::class, 'register']);
Route::post('/v1/login', [AuthController::class, 'login']);

## Autenticados
Route::middleware('auth:api')->group(function () {
    Route::get('/v1/user', [AuthController::class, 'user']); ## Mostra usuario logado
    Route::post('/v1/logout', [AuthController::class, 'logout']);  ## Invalida token fazendo com que usuario deslogue
    Route::get('/v1/users', [AuthController::class, 'users']);  ## Lista todos os usuarios 
});