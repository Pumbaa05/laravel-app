<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any}', function () {
    return view('/templates/base/core'); // Ensure you have a view file named 'app.blade.php'
})->where('any', '.*');
