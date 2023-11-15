<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Front\HomeController;

Route::get('admin/dashboard', [AdminHomeController::class, 'index'])->name('dashboard')->middleware('admin:admin');

Route::get('admin/login', [AdminLoginController::class, 'login'])->name('login');
Route::post('admin/login-submit', [AdminLoginController::class, 'loginSubmit'])->name('loginSubmit');
Route::post('admin/forget-password-submit', [AdminLoginController::class, 'forgetPasswordSubmit'])->name('forgetPasswordSubmit');

Route::get('admin/reset-password/{token}/{email}', [AdminLoginController::class, 'resetPassword'])->name('resetPassword');

Route::get('admin/logout', [AdminLoginController::class, 'logOut'])->name('logout');

Route::get('admin/forget-password', [AdminLoginController::class, 'forgetPassword'])->name('forgetPassword');

Route::post('admin/reset-password-submit', [AdminLoginController::class, 'resetPasswordSubmit'])->name('resetPasswordSubmit');

Route::get('admin/profile-edit', [AdminProfileController::class, 'editProfile'])->name('editProfile')->middleware('admin:admin');
Route::post('admin/profile-update', [AdminProfileController::class, 'updateProfile'])->name('updateProfile')->middleware('admin:admin');

/**
 * Frontend Route
 */

 Route::get('/', [HomeController::class, 'HomePage'])->name('home');


