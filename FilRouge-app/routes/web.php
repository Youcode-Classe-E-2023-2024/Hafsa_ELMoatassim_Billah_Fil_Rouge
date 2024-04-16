<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function ()
{return view('Home');});

Route::get('/FAQ', function ()
{return view('FAQ');});

// Dashboard routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// User management routes
Route::delete('/dashboard/{user}', [DashboardController::class, 'banUser'])->name('ban.user');
Route::patch('/Admin/dashboard/recover/{user}', [DashboardController::class, 'recoverUser'])->name('recover.user');

// Product routes
Route::post('/Admin/Dash_Product', [ProductController::class, 'addProduct'])->name('Admin.Dash_Product');
Route::get('/Dash_Product', [ProductController::class, 'showProductsAdmin']);
Route::get('/All_products', [ProductController::class, 'showProducts']);
Route::get('/Description/{id}', [ProductController::class, 'showProductDescription'])->name('Description');
Route::delete('/products/{id}', [ProductController::class, 'softDelete'])->name('products.softDelete');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/', [ProductController::class, 'showLast4Products'])->name('last-4-products');

// Category routes
Route::post('/categories', [CategoryController::class, 'store'])->name('add.category');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('delete.category');

// Contact routes
Route::get('/Contact', function ()
{return view('Contact');});

Route::post('/Contact', [ContactController::class, 'store'])->name('contact.store');
//
// Auth
Route::get('/login', [LoginController::class,'login']);
Route::post('/login', [LoginController::class,'store']);
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'destroy']);

// Password Forgot
Route::get('/forgot-password', [ForgotPasswordLinkController::class, 'create'])->name('forgot-password');
Route::post('/forgot-request', [ForgotPasswordLinkController::class, 'store']);
Route::post('/forgot-password', [ForgotPasswordController::class, 'reset'])->name('new_password');

// Password Reset
Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showForm'])->name('password.reset');
Route::post('password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset')->name('password.update');
