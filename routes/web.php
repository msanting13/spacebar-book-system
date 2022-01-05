<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'User'], function () {
    Route::get('/profile', [UserProfileController::class, 'index'])->name('user.profile');
    Route::put('update/profile/{id}', [UserProfileController::class, 'update'])->name('user.profile.update');
    Route::get('/security-and-login', [SecurityAndLoginController::class, 'index'])->name('user.security.login');
    Route::put('update/password', [SecurityAndLoginController::class, 'updatePassword'])->name('user.update.password');
});


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('login', [LoginController::class, 'login'])->name('admin.auth.login');
    Route::post('login', [LoginController::class, 'submit'])->name('admin.submit.auth.login');
    Route::post('logout', [LoginController::class, 'logout'])->name('admin.submit.logout');
    Route::get('/', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard', [HomeController::class, 'index']);

    Route::get('profile', [ProfileController::class, 'edit'])->name('admin.profile');
    Route::put('profile', [ProfileController::class, 'update'])->name('admin.profile.update');

    Route::get('users', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::put('user/edit/{id}', [UserController::class, 'update'])->name('admin.user.update');
    Route::get('rooms', [RoomController::class, 'index'])->name('admin.room.index');
    Route::get('room/create', [RoomController::class, 'create'])->name('admin.room.create');
    Route::post('room/create', [RoomController::class, 'store'])->name('admin.room.store');
    Route::get('room/edit/{id}', [RoomController::class, 'edit'])->name('admin.room.edit');
    Route::put('room/edit/{id}', [RoomController::class, 'update'])->name('admin.room.update');
});


