<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// routing employee
Route::resource('employees', EmployeeController::class);
require __DIR__ . '/auth.php';
