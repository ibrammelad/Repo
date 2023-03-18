<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\User\RegisterUserController;
use \App\Http\Controllers\User\HomePageController;

Route::controller(RegisterUserController::class)->group(function () {
    Route::get('UserLogin', 'loginUserPage')->name('loginUserPage');
    Route::post('UserLogin', 'loginUser')->name('loginUser');
});
Route::get('/', HomePageController::class)->name('HomePage');

