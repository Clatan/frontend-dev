<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/add-product', function () {
    return view('/product/addproduct');
})->name('add.product');

Route::get('/manage-product', [ProductController::class, 'index'])->name('product.index');

Route::post('/add-product', function (Illuminate\Http\Request $request) {
    $request->validate([
        'name_product' => 'required|string|max:255',
        'price_product' => 'required|numeric|min:0',
        'stock_product' => 'required|integer|min:0',
    ]);

    return redirect()->route('add.product')->with('success', 'Product added successfully!');
})->name('add.product.submit');
