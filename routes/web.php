<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/guru',function () {
    return view('guru');
});
Route::get('/siswa',function () {
    return view('siswa');
});

Route::get('/user',function () {
    return view('user');
});

Route::get('/',[\App\Http\Controllers\PostController::class,'home']);
Route::get('/blog',[\App\Http\Controllers\PostController::class,'blog']);
Route::get('/search',[\App\Http\Controllers\PostController::class,'search']);
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);
    Route::delete('logout', [AuthController::class, 'logout']) ->name('logout');
});