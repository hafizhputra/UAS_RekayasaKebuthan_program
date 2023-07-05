<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\daftarcustomerController;

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
    return redirect()->route('login');
});

Auth::routes();

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
    Route::get('daftarcustumer',[daftarcustomerController::class, 'daftarcustumer'])->name('daftarcustumer.index');
    Route::get('services/about',[ReservationController::class, 'about'])->name('services.about');
    Route::resource('services', ServiceController::class);
    Route::get('reservations', [ReservationController::class, 'index'])->name('reservations.index');

    Route::get('reservations/updateStatus/{id}/{status}', [ReservationController::class, 'updateStatus'])->name('reservations.status');


});

Route::middleware(['auth', 'customer'])->group(function () {
    Route::get('customer/dashboard', [DashboardController::class, 'customer'])->name('customer.dashboard');
    Route::get('reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
    Route::post('reservations', [ReservationController::class, 'store'])->name('reservations.store');
    Route::get('reservations/history', [ReservationController::class, 'history'])->name('reservations.history');
    Route::get('reservations/list', [ReservationController::class, 'list'])->name('reservations.list');
    Route::get('reservations/about',[ReservationController::class, 'about'])->name('reservations.about');
    Route::get('reservations/{id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
    Route::put('reservations/{id}', [ReservationController::class, 'update'])->name('reservations.update');
    Route::delete('reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');
});
