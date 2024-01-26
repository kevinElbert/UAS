<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/register', function () {
    return view('register');
})->middleware('guest');

Route::get('/login', function () {
    return view('login');
})->middleware('guest');

Route::get('/homepage', [UserController::class, 'home']);

Route::get('/admin', function () {
    return view('admin');
})->middleware('admin');


Route::get('/logout', [UserController::class, 'logout']);

Route::get('/manage', [UserController::class, 'manage']);

Route::post('/update-user', [UserController::class, 'update'])->name('update');

Route::post('/register-user', [UserController::class, 'register'])->name('register');
Route::post('/login-user', [UserController::class, 'login'])->name('login');

Route::post('/delete-user', [UserController::class, 'delete'])->name('delete-user');
