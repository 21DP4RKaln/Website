<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrizeController;
use App\Http\Controllers\UserHandler;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellingItemController;
use App\Http\Controllers\WheelController;
use App\Http\Controllers\WelcomeController;
use App\Models\Product;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/wheel', [PrizeController::class, 'index'])->name('wheel');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/wheel', [PrizeController::class, 'index'])->name('wheel');

    Route::post('/spin', [WheelController::class, 'spin'])->middleware('auth');

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit'); 
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/avatar', [ProfileController::class, 'updateAvatar'])->name('profile.updateAvatar');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); 
    Route::get('/profile/link/{provider}', [ProfileController::class, 'linkAccount'])->name('profile.linkAccount');

    Route::get('/items/add', [ItemController::class, 'add'])->name('items.add');
    Route::get('/items/viewAll', [ItemController::class, 'viewAll'])->name('items.viewAll');

    Route::get('/wishlist/viewAll', [WishlistController::class, 'viewAll'])->name('wishlist.viewAll');

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/add', [ProductController::class, 'add'])->name('products.add');
    Route::get('/products/viewAll', [ProductController::class, 'viewAll'])->name('products.viewAll');

    Route::get('/sellingItems', [SellingItemController::class, 'index'])->name('sellingItems.index');

    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishList.index');
});

require __DIR__.'/auth.php';





