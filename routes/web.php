<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Route::get('/register', function () {
    return view('auth.register'); // Make sure 'auth.register' exists in resources/views/auth/
})->name('register');

Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', function () {
    return view('auth.login'); // Make sure 'auth.login' exists in resources/views/auth/
})->name('login');

Route::post('/login', [AuthController::class, 'login']);



Route::middleware(['web'])->group(function () {
    Route::get('/userdashboard', [AuthController::class, 'index'])->name('userdashboard')->middleware('auth');
});


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::get('/admindashboard', function () {
    return view('admindashboard');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/management-category', function () {
    return view('management-category');
})->name('management.category');

Route::get('/management-accounts', function () {
    return view('management-accounts');
})->name('management.accounts');

Route::get('/manage-products', function () {
    return view('manage-products');
})->name('manage.products');

Route::get('/order-management', function () {
    return view('order-management');
})->name('order.management');


Route::get('management.category', [CategoryController::class, 'index']);

Route::resource('categories', CategoryController::class);
