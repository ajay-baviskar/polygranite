<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Public Routes
Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/portfolio', [PortfolioController::class, 'index2'])->name('portfolio');
Route::get('/portfolio-details/{id}', [PortfolioController::class, 'show'])->name('portfolio.details');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/auth/google', [RegisterController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [RegisterController::class, 'handleGoogleCallback']);
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('password.request');

// Admin Routes (Protected)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/portfolio/list', [PortfolioController::class, 'list'])->name('portfolio.list');
    Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('/portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::put('/portfolio/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::delete('/portfolio/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');
    Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/service', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/feature/create', [ServiceController::class, 'createFeature'])->name('feature.create');
    Route::post('/feature', [ServiceController::class, 'storeFeature'])->name('feature.store');
    Route::get('/contact/list', [ContactController::class, 'list'])->name('contact.list');
    Route::get('/contact/{id}', [ContactController::class, 'show'])->name('contact.show');
    Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
});

// Admin Fallback
Route::get('/admin', function () {
    return view('admin/admin');
})->middleware('auth')->name('admin');
