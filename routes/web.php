<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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

Route::middleware('Ebook')->group(function () {
    Route::get('/home', [EbookController::class, 'user'])->name('user');
    Route::get('/home/selected', [EbookController::class, 'selected'])->name('selected');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware('isGuest')->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/postLogin', [LoginController::class, 'postLogin'])->name('loginOut');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/registerinput', [RegisterController::class, 'registerAccount'])->name('registerInput');
    
    Route::get('/', [EbookController::class, 'index'])->name('index');
    Route::get('/books', [EbookController::class, 'books'])->name('books');
    Route::get('/contact', [EbookController::class, 'contact'])->name('contact');
});
