<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\FibonacciController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route Home
Route::get('/', function () {
    return view('index');
});

// Route Login
Route::get('/logout', [LoginController::class, 'logout'])->name('guest');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/authenticate', [LoginController::class, 'authenticate']);

//Route Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

// Fibonacci
Route::get('/fib', [FibonacciController::class, 'fibonacci'])->name('fib');

// Route Group Authenticate
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/tambah', [AdminController::class, 'tambah'])->name('tambah');
    Route::get('/rekap', [AdminController::class, 'RekapTransaksi'])->name('rekap');
    Route::post('/income', [AdminController::class, 'income'])->name('income');
    Route::post('/expense', [AdminController::class, 'expense'])->name('expense');
    // Transaksi
    Route::resources([
        'list' => TransaksiController::class
    ]);
});
