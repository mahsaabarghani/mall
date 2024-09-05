<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\MallAdminController;
use App\Http\Controllers\StoreAdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//MainPagecontroller
Route::get('/', [MainPageController::class, 'index'])->name('main.index');

//SuperAdminController
Route::get('/superAdminDashboard', [SuperAdminController::class, 'index'])->name('superAdmin.index');

//MallAdminController
Route::get('/mallAdminDashboard', [MallAdminController::class, 'index'])->name('mallAdmin.index');

//StoreAdminController
Route::get('/storeADminDashboard', [StoreAdminController::class, 'index'])->name('storeADmin.index');

//UserController
Route::get('/userDashboard', [UserController::class, 'index'])->name('user.index');


require __DIR__ . '/auth.php';
