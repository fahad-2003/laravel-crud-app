<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('cars', CarController::class);
});

Auth::routes();

Route::post('/logout', function () {
    auth()->logout();
    return redirect('/login');
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::resource('cars', CarController::class);
});
