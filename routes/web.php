<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

// -----------------------------
// LANDING PAGE
// -----------------------------
Route::get('/', function () {
    return view('welcome'); // Vista de landing page
});

// -----------------------------
// LOGIN Y REGISTRO
// -----------------------------
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// -----------------------------
// RUTAS PROTEGIDAS (requieren login)
// -----------------------------
Route::middleware('auth')->group(function () {
    // Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // CRUD de productos
    Route::resource('products', ProductController::class);
});
