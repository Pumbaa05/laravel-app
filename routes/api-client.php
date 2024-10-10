<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Endpoint: /api/client
|
*/

Route::prefix('api')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('login',[LoginController::class, 'index'])->name('');
    });
});
