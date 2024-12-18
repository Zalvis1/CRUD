<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/customer/trash', [CustomerController::class, 'trashindex'])->name('customer.trash');
Route::get('/customer/restore/{customer}', [CustomerController::class, 'restore'])->name('customer.restore');
Route::delete('/customer/trash/{customer}', [CustomerController::class, 'forcedestroy'])->name('customer.force.destroy');
Route::resource('customers', CustomerController::class);
