<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::view('', 'dashboard')->name('dashboard');

    Route::resource('schools', SchoolController::class);
    Route::resource('students', StudentController::class);
});



require __DIR__ . '/auth.php';
