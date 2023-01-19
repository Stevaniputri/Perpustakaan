<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [EbookController::class, 'index'])->name('index');

Route::get('/login', [EbookController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'auth'])->name('login.post');

Route::get('/registrasi', [EbookController::class, 'regis']);

Route::post('/registrasi', [LoginController::class, 'register'])->name('createAccount');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['Login', 'CekRole:0'])->group(function () {
    Route::get('/dashboard', [EbookController::class, 'user']);
    Route::get('/read-book/{id}', [EbookController::class, 'read']);
    
});

Route::middleware(['Login', 'CekRole:1'])->group(function () {
    Route::get('/dashboard-admin', [AdminController::class, 'index']);
    Route::get('/user-admin', [AdminController::class, 'user']);
    Route::get('/book-admin', [AdminController::class, 'book']);
    Route::get('/category-admin', [AdminController::class, 'category']);
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::post('/book-admin', [AdminController::class, 'createBook'])->name('createBook');
    Route::post('/category-admin', [AdminController::class, 'createCategory'])->name('createCategory');
    Route::patch('/update/{id}', [AdminController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [AdminController::class, 'destroy'])->name('destroy');
    Route::delete('/destroy-category/{id}', [AdminController::class, 'destroy_category'])->name('destroy_category');
    Route::delete('/destroy-user/{id}', [AdminController::class, 'destroy_user'])->name('destroy_user');
});
