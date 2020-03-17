<?php

use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(static function () {
    Route::apiResource('users', 'UserController');
});
