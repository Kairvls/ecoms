<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\ChangeController;
use App\Http\Controllers\ManageProductsController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderManagementController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\AdminController;
use Illuminate\View\View;


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


Route::get('/update-profile', function () {
    return view('auth.update-profile'); // Make sure 'auth.login' exists in resources/views/auth/
})->name('update.profile');

Route::post('/update-profile', [AuthController::class, 'updateProfile'])->name('update.profile');






Route::middleware(['web'])->group(function () {
    Route::get('/userdashboard', [AuthController::class, 'index'])->name('userdashboard')->middleware('auth');
});



Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');


Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admindashboard', function () {
        return view('admindashboard');
    })->name('admindashboard');
});


Route::post('/', [AuthController::class, 'logout'])->name('welcome');








Route::get('/sidebar', function () {
    return view('sidebar');
});


Route::get('/manage-categories', [CategoryController::class, 'index'])->name('categories.index'); // GET all categories
Route::post('/manage-categories', [CategoryController::class, 'store'])->name('categories.store'); // POST new category
Route::get('/manage-categories/{id}', [CategoryController::class, 'show'])->name('categories.show'); // GET a single category
Route::put('/manage-categories/{id}', [CategoryController::class, 'update'])->name('categories.update'); // UPDATE a category
Route::delete('/manage-categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy'); // DELETE a category

// Resource route for CategoryController
Route::resource('categories', CategoryController::class);



Route::get('/manage-products', [ManageProductsController::class, 'index'])->name('manage.products');
Route::post('/manage-products', [ManageProductsController::class, 'store'])->name('manage.products.store');
Route::get('/manage-products/{id}/edit', [ManageProductsController::class, 'edit'])->name('manage.products.edit');
Route::put('/manage-products/{id}', [ManageProductsController::class, 'update'])->name('manage.products.update');
Route::delete('/manage-products/{id}', [ManageProductsController::class, 'destroy'])->name('manage.products.destroy');






Route::get('/', [UserController::class, 'index']);

Route::get('/userdashboard', [UserDashboardController::class, 'index'])->name('userdashboard');





Route::get('/manage-accounts', [ManageController::class, 'manageAccounts'])->name('manage.accounts');
Route::post('/manage-accounts', [ManageController::class, 'store'])->name('store');


Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'add'])->name('cart.update');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::patch('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');

Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('checkout.process');
Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout');


Route::get('/my-orders', [OrderController::class, 'index'])->name('my.orders');
Route::post('/my-orders/remove/{id}', [OrderController::class, 'remove'])->name('my.orders.remove');
Route::get('/my-orders/{status?}', [OrderController::class, 'index'])->name('my-orders');


Route::get('/orders', [OrderManagementController::class, 'index'])->name('orders.index');
Route::post('/orders/update/{id}', [OrderManagementController::class, 'updateStatus'])->name('orders.update');


Route::get('/cartfirst', function () {
    return view('cartfirst');
})->name('cartfirst');


Route::get('/modal', function () {
    return view('modal');
})->name('modal');

Route::get('/order-management', function () {
    return view('order-management');
})->name('order.management');

Route::get('/userdash', function () {
    return view('userdash');
})->name('userdash');


Route::get('/sales-overview', [ChartController::class, 'showChart'])->name('sales.overview');
Route::get('/sales-data', [ChartController::class, 'getSalesOverview'])->name('sales.data');



