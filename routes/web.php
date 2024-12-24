<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;

// Rute untuk Sign In dan Sign Up
Route::get('/signin', [AuthController::class, 'showSignInForm'])->name('signin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk Profile
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth')->name('profile');

// Rute untuk Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

// Rute untuk Blog Post
Route::get('/post/{id}', [PostController::class, 'show'])->name('post');