<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/courses', [PageController::class, 'courses'])->name('courses');
Route::get('/trainers', [PageController::class, 'trainers'])->name('trainers');
Route::get('/events', [PageController::class, 'events'])->name('events');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');