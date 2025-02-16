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
use App\Http\Controllers\OrdersController;
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


Route::post('/', [AuthController::class, 'logout'])->name('welcome');


Route::get('/adminlogin', function () {
    return view('adminlogin');
});


Route::get('/admindashboard', function () {
    return view('admindashboard');
});


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


Route::get('/userdashboard', [UserDashboardController::class, 'index'])->name('userdashboard');


Route::get('/manage-accounts', [ManageController::class, 'manageAccounts'])->name('manage.accounts');
Route::post('/manage-accounts', [ManageController::class, 'store'])->name('store');

Route::get('/userdashboard/cart', [CartController::class, 'index'])->name('cart.index');

// Add to cart from user dashboard
Route::post('/userdashboard/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');

// Show cart page
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');

// Remove item from cart
Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

// Checkout process
Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');


Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');


Route::middleware(['auth'])->group(function () {
    Route::get('/orders', [OrdersController::class, 'index'])->name('orders.index'); // View all orders
    Route::post('/orders/store', [OrdersController::class, 'store'])->name('orders.store'); // Place an order
    Route::get('/orders/{id}', [OrdersController::class, 'show'])->name('orders.show'); // View a single order
});


Route::get('/modal', function () {
    return view('modal');
})->name('modal');

Route::get('/order-management', function () {
    return view('order-management');
})->name('order.management');



