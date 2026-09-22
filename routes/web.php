<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;

Route::get('/employee', function () {
    return view('employee');
});


Route::get('/employee', [employeeController::class, 'index'])->name('student');
