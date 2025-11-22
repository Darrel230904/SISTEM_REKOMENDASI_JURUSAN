<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;

// Public Routes
Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/courses', [PublicController::class, 'courses'])->name('courses');
Route::get('/trainers', [PublicController::class, 'trainers'])->name('trainers');
Route::get('/events', [PublicController::class, 'events'])->name('events');
Route::get('/pricing', [PublicController::class, 'pricing'])->name('pricing');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/charts', [AdminController::class, 'charts'])->name('admin.charts');
    Route::get('/tables', [AdminController::class, 'tables'])->name('admin.tables');
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/register', [AdminController::class, 'register'])->name('admin.register');
    Route::get('/forgot-password', [AdminController::class, 'forgotPassword'])->name('admin.forgot-password');
    Route::get('/401', [AdminController::class, 'error401'])->name('admin.error.401');
    Route::get('/404', [AdminController::class, 'error404'])->name('admin.error.404');
    Route::get('/500', [AdminController::class, 'error500'])->name('admin.error.500');
});