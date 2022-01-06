<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\SecurityAndLoginController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'User'], function () {
    Route::get('booking', [BookingController::class, 'index'])->name('user.booking.index');
    Route::post('search/booking', [BookingController::class, 'search'])->name('user.booking.search');
    Route::get('book/room/{room_id}', [BookingController::class, 'showBookForm'])->name('user.booking.bookform');
    Route::post('book/{room_id}', [BookingController::class, 'book'])->name('user.booking.book');

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
});


