<?php

use App\Models\Page;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Facility;
use App\Models\Feedback;
use App\Models\RoomType;
use Barryvdh\DomPDF\PDF;
use Cloudinary\Cloudinary;
use Cloudinary\Api\Upload\UploadApi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Cloudinary\Configuration\Configuration;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\RoomsController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Reports\SalesController;
use App\Http\Controllers\User\FeedbackController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\RoomTypeController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\Admin\CustomerBookingController;
use App\Http\Controllers\User\SecurityAndLoginController;
use App\Http\Controllers\User\FacilityController as UserFacilityController;
use App\Http\Controllers\Admin\FeedbackController as CustomerFeedBackController;

Route::get('/', function () {
    $pages = Page::orderBy('index', 'ASC')->get();
    $rooms = Room::get();
    $facilities = Facility::get();
    $feedbacks = Feedback::where('rating', '>=', 3)->get()->unique('user_id');
    return view('welcome', compact('pages', 'rooms', 'facilities', 'feedbacks'));
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::group(['namespace' => 'User', 'middleware' => ['verified']], function () {
    Route::get('feedback', [FeedbackController::class, 'create'])->name('user.feedback.create');
    Route::post('feedback', [FeedbackController::class, 'store'])->name('user.feedback.store');

    Route::get('booking', [BookingController::class, 'index'])->name('user.booking.index');
    Route::post('search/booking', [BookingController::class, 'search'])->name('user.booking.search');
    Route::get('book/room/{room_id}', [BookingController::class, 'showBookForm'])->name('user.booking.bookform');
    Route::post('book/{room_id}', [BookingController::class, 'book'])->name('user.booking.book');

    Route::get('view-invoice/{bookID}', function (int $bookID) {
        $booking = Booking::find($bookID);
        return view('user.invoice.index', compact('booking'));
    })->name('user.view.invoice');

    Route::put('booking-update/{bookID}/{sourceID}', function (int $bookID, string $sourceID) {
        $booking = Booking::find($bookID);
        $booking->source_id = $sourceID;
        $booking->save();
        return response()->json(['success' => true]);
    });
    
    Route::get('profile', [UserProfileController::class, 'index'])->name('user.profile');
    Route::put('update/profile/{id}', [UserProfileController::class, 'update'])->name('user.profile.update');
    Route::put('update/password', [SecurityAndLoginController::class, 'updatePassword'])->name('user.update.password');

    Route::get('rooms', [RoomsController::class, 'index'])->name('user.rooms.index');

    Route::get('facilities', [UserFacilityController::class, 'index'])->name('user.facilities.index');
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
    Route::delete('room/delete/{id}', [RoomController::class, 'delete'])->name('admin.room.delete');

    Route::resource('extras', ExtraController::class);

    Route::get('room-types', [RoomTypeController::class, 'index'])->name('admin.room-types.index');
    Route::get('room-types/create', [RoomTypeController::class, 'create'])->name('admin.room-types.create');
    Route::post('room-types/create', [RoomTypeController::class, 'store'])->name('admin.room-types.store');
    Route::get('room/{type}/edit', [RoomTypeController::class, 'edit'])->name('admin.room-types.edit');
    Route::put('room/{type}/update', [RoomTypeController::class, 'update'])->name('admin.room-types.update');

    Route::get('page', [PageController::class, 'index'])->name('admin.page.index');
    Route::get('content/create', [PageController::class, 'create'])->name('admin.page.create');
    Route::post('content/create', [PageController::class, 'store'])->name('admin.page.store');
    Route::get('content/{id}/edit', [PageController::class, 'edit'])->name('admin.page.edit');
    Route::put('content/{id}/update', [PageController::class, 'update'])->name('admin.page.update');
    Route::delete('content/{id}/delete', [PageController::class, 'delete'])->name('admin.page.delete');

    Route::get('facility/index', [FacilityController::class, 'index'])->name('admin.facility.index');
    Route::get('facility/create', [FacilityController::class, 'create'])->name('admin.facility.create');
    Route::post('facility/create', [FacilityController::class, 'store'])->name('admin.facility.store');
    Route::get('facility/{id}/edit', [FacilityController::class, 'edit'])->name('admin.facility.edit');
    Route::put('facility/{id}/edit', [FacilityController::class, 'update'])->name('admin.facility.update');

    Route::get('feedback/index', [CustomerFeedBackController::class, 'index'])->name('admin.feedbacks.index');

    Route::get('generate/report/', [SalesController::class, 'generate'])->name('reports.create');

    Route::patch('approve/booking/{booking_id}', [CustomerBookingController::class, 'approveBooking'])->name('approve.customer.booking');
});


Route::get('success/{bookID}', function (int $bookID) {
    $booking = Booking::find($bookID);
    $user = Auth::user();
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadView('user.payment.confirmation-letter', compact('booking', 'user'));
    return $pdf->stream();
});

Route::get('failed', function () {
    return view('user.payment.failed');
});

Route::get('cloudinary', function () {
    // $response = (new UploadApi())->upload(public_path() . '\\admin-assets\\images\\users\\image_placeholder.png');
    // dd($response['url']);
});

