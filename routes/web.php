<?php

use App\Http\Controllers\Access\RecoveryController;
use App\Http\Controllers\Access\RegisterController;
use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Account\NotificationController;
use App\Http\Controllers\Account\RequestController;
use App\Http\Controllers\Account\SearchController;
use App\Http\Controllers\Account\ItemController;
use App\Http\Controllers\Access\LoginController;
use App\Http\Controllers\Account\SharedController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->as('access.')->group(function () {
    Route::controller(LoginController::class)->as('login.')->group(function () {
        Route::post('login', 'store')->name('store');
        Route::get('', 'index')->name('index');
    });
    Route::resource('register', RegisterController::class)->only('index', 'store');
    Route::resource('recovery', RecoveryController::class)->only('index', 'store');
});

Route::middleware('auth')->as('account.')->group(function () {
    Route::get('search', SearchController::class)->name('search');
    Route::get('shared', SharedController::class)->name('shared');
    Route::get('request', RequestController::class)->name('request');

    Route::resource('notification', NotificationController::class);
    Route::resource('item', ItemController::class);

    Route::controller(AccountController::class)->group(function () {
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('profile', 'profile')->name('profile');
        Route::post('logout', 'logout')->name('logout');
    });
});


