<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Base\IndexController;

/*
|--------------------------------------------------------------------------
| Base Routes
|--------------------------------------------------------------------------
|
| Endpoint: /
|
*/

Route::get('/', [IndexController::class, 'index'])->name('index')->fallback();
Route::get('/{react}', [IndexController::class, 'index'])
    ->where('react', '^(?!(\/)?(api|admin|daemon)).+');