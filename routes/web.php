<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;

use GuzzleHttp\Middleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user-page', function () {
    return view('user-page');
})->middleware('auth','is_admin:manager');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk menampilkan form booking
Route::get('/booking', [BookingController::class, 'create'])->name('booking');

// Route untuk menampilkan list data booking
Route::get('/booked', [BookingController::class, 'index'])->name('booked');

// Resource route untuk operasi CRUD lainnya
Route::resource('bookings', BookingController::class)->except(['create', 'index']);


Route::get('/booking', function () {
    return view('booking/add_booking');
})->name('booking');

Route::get('/booked', function () {
    return view('booking/booked');
})->name('booked');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

require __DIR__.'/admin-auth.php';
