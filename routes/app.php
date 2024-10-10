<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Base\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('index')->fallback();
Route::get('/{react}', function () {
    return view('/templates/base/core');
})->where('react', '^(?!(\/)?(api|auth|admin|daemon)).+');