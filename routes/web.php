<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Menu;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login-merchant', [UserController::class, 'loginMerchant'])->name('login.merchant');
Route::post('/login-merchant', [UserController::class, 'doLoginMerchant'])->name('do.login.merchant');
Route::get('/register-merchant', [UserController::class, 'registerMerchant'])->name('register.merchant');
Route::post('/register-merchant', [UserController::class, 'doRegisterMerchant'])->name('do.register.merchant');

Route::post('logout', [UserController::class, 'logout'])->name('logout');


Route::middleware(['merchant'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.merchant');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile.merchant');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.merchant.update');

    Route::get('/menu', [MenuController::class, 'menu'])->name('menu.merchant');
    Route::get('/create', [MenuController::class, 'createMenu'])->name('menu.merchant.create');
    Route::get('/edit/{id}', [MenuController::class, 'editMenu'])->name('menu.merchant.edit');
    Route::put('/edit/{id}', [MenuController::class, 'updateMenu'])->name('menu.merchant.update');
    Route::post('store', [MenuController::class, 'storeMenu'])->name('menu.merchant.store');
    Route::delete('/destroy/{id}', [MenuController::class, 'destroyMenu'])->name('menu.merchant.destroy');
});
