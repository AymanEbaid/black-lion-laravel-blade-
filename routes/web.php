<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::latest()->take(5)->get();
    return view('welcome', compact('products'));
})->name('home');
Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('contact', function () {
    return view('Contact');
})->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get("products", function () {
    $products = Product::latest()->paginate(12); // 12 منتج لكل صفحة
    return view('products.AllProducts', compact('products'));
})->name('products.all');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('unauthorized', function () {
        return view('pages.unauthorized');
    })->name('unauthorized');

    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard', [
                'products' => Product::latest()->take(5)->get(),
                'users' => User::latest()->take(5)->get(),
                'productsCount' => Product::count(),
                'usersCount' => User::count(),
            ]);
        })->name('dashboard');
        Route::resource('admin/products', ProductController::class)->except(['show']);

        Route::put('/users/{id}/role', [UserController::class, 'updateRole'])->name('users.updateRole');
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
    });
});

require __DIR__ . '/auth.php';
