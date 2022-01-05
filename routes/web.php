<?php

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
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\User\UserProfileController::class, 'index'])->name('user.profile');
Route::put('update/profile/{id}', [App\Http\Controllers\User\UserProfileController::class, 'update'])->name('user.profile.update');
Route::get('/security-and-login', [App\Http\Controllers\User\SecurityAndLoginController::class, 'index'])->name('user.security.login');
Route::put('update/password', [App\Http\Controllers\User\SecurityAndLoginController::class, 'updatePassword'])->name('user.update.password');

