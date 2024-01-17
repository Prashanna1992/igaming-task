<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;

Route::group(['prefix' => 'v1'], function () {
    Route::controller(LoginController::class)->group(function () {
        Route::post('authenticate', 'login');
    });
});
