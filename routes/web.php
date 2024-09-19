<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\UserLoginController;
use App\Http\Controllers\User\UserRegistationController;
use App\Http\Controllers\User\UserDashBoardController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminRegistationController;
use App\Http\Controllers\Admin\AdminDashBoardController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/', [AuthController::class, 'redirectToHome'])->name('redirect');
// User Authentication Routes
Route::get('/login', [UserLoginController::class, 'index'])->name('login')->middleware('clear_cookies');;
Route::post('/check', [UserLoginController::class, 'check'])->name('check');
Route::get('/register', [UserRegistationController::class, 'create'])->name('register');
Route::post('/register', [UserRegistationController::class, 'store'])->name('user.register');
//middleware implementation
Route::middleware(['auth', 'user'])->group(function () {
    
 Route::get('/user/dashboard', [UserDashBoardController::class, 'dashboard'])->name('user.dashboard');
//  Route::get('/records', [RecordViewController::class, 'index'])->name('record.index');
 Route::post('/logout', [UserLoginController::class, 'logout'])->name('user.logout')->middleware('clear_cookies');
});

// Admin Authentication Routes
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin.login')->middleware('clear_cookies');;
Route::post('/admin/check', [AdminLoginController::class, 'admincheck'])->name('admin.check');
Route::get('/admin/register', [AdminRegistationController::class, 'create'])->name('admin.register');
Route::post('/admin/register', [AdminRegistationController::class, 'store'])->name('admin.store');
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashBoardController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout')->middleware('clear_cookies');
     
});

Route::get('auth/google', [GoogleAuthController::class, 'provider'])->name('google.login');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
