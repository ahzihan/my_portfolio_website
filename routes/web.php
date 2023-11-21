<?php

use App\Http\Controllers\Admin\AboutBackendController;
use App\Http\Controllers\Admin\AdminEducationController;
use App\Http\Controllers\Admin\AdminExperienceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\BackendSkillController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PortfolioController;
use App\Http\Controllers\Front\ServiceController;

/**
 * Admin Route
 */
Route::resource('banner', BannerController::class);
Route::resource('aboutInfo', AboutBackendController::class);
Route::resource('social', SocialController::class);
Route::resource('skill', BackendSkillController::class);
Route::resource('education', AdminEducationController::class);
Route::resource('experience', AdminExperienceController::class);


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
 Route::get('/about', [AboutController::class, 'AboutPage'])->name('about');
 Route::get('/service', [ServiceController::class, 'ServicePage'])->name('service');
 Route::get('/blog', [BlogController::class, 'BlogPage'])->name('blog');
 Route::get('/contact', [ContactController::class, 'ContactPage'])->name('contact');
 Route::get('/portfolio', [PortfolioController::class, 'PortfolioPage'])->name('portfolio');


