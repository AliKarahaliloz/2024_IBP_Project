<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdminUserController;



Route::get('/', function () {
    return view('index');
})->name('admin.dashboard');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/userpage', function () {
    return view('userpage');
})->name('userpage');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);



Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);



Route::get('/adminlogin', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/adminlogin', [AdminController::class, 'login']);



Route::post('/userpage', [MessageController::class, 'submitMessage'])->name('submit-message');




Route::get('/adminusersindex', [AdminUserController::class, 'index'])->name('admin.users.index');
Route::get('/adminusersedit/{id}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
Route::put('/adminusersedit/{id}', [AdminUserController::class, 'update'])->name('admin.users.update');




Route::get('/adminusersmessage', [MessageController::class, 'showMessages'])->name('admin.messages.index');
