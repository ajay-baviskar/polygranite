<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('portfolio', function () {
    return view('portfolio');
});

Route::get('services', function () {
    return view('services');
});

Route::get('about', function () {
    return view('about');
});


Route::get('pricing', function () {
    return view('pricing');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('portfolio-details', function () {
    return view('portfolio-details');
});
// Route::view('portfolio-details','portfolio');

Route::get('admin', function () {
    return view('admin/admin');
});




// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login'])->name('login');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register'])->name('register');
// Route::get('/forgot-password', function () {
//     return view('forgot-password'); // Assumes you have a forgot-password.blade.php
// })->name('password.request');
// Route::get('/dashboard', function () {
//     return view('admin/admin'); // Assumes you have a dashboard.blade.php
// })->middleware('auth')->name('dashboard');


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
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/portfolio/create', [PortfolioController::class, 'create'])->middleware('auth')->name('portfolio.create');
Route::post('/portfolio', [PortfolioController::class, 'store'])->middleware('auth')->name('portfolio.store');
Route::get('/portfolio-details/{id}', [PortfolioController::class, 'show'])->name('portfolio.details');
