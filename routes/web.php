<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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

