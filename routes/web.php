<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;

// Home Route
Route::get('/', [PublicController::class, 'home'])->name('home');

// Public Routes
Route::prefix('public')->name('public.')->group(function () {
    Route::get('/about', [PublicController::class, 'about'])->name('about');
    Route::get('/courses', [PublicController::class, 'courses'])->name('courses');
    Route::get('/trainers', [PublicController::class, 'trainers'])->name('trainers');
    Route::get('/events', [PublicController::class, 'events'])->name('events');
    Route::get('/pricing', [PublicController::class, 'pricing'])->name('pricing');
    Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/charts', [AdminController::class, 'charts'])->name('charts');
    Route::get('/tables', [AdminController::class, 'tables'])->name('tables');
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::get('/register', [AdminController::class, 'register'])->name('register');
    Route::get('/forgot-password', [AdminController::class, 'forgotPassword'])->name('forgot-password');
    Route::get('/401', [AdminController::class, 'error401'])->name('error.401');
    Route::get('/404', [AdminController::class, 'error404'])->name('error.404');
    Route::get('/500', [AdminController::class, 'error500'])->name('error.500');
});