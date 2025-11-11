<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/layouts/app');
});

Route::get('/add-product', function () {
    return view('/product/addproduct');
})->name('add.product');
