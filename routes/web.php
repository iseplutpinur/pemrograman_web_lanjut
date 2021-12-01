<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Livewire\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// routing employee
Route::resource('employees', EmployeeController::class);

// routing employee
Route::get('employees_livewire', Employee::class)->name('employees_livewire');
require __DIR__ . '/auth.php';
