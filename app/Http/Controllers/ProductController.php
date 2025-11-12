<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function index()
    {
        // Data dummy
        $products = [
            [
                'id_product' => 1,
                'name_product' => 'Laptop Asus ROG',
                'price_product' => 25000000,
                'stock_product' => 10,
                'created_at' => Carbon::now()->subDays(2)->toDateTimeString(),
            ],
            [
                'id_product' => 2,
                'name_product' => 'Mouse Logitech G Pro',
                'price_product' => 1200000,
                'stock_product' => 25,
                'created_at' => Carbon::now()->subDays(1)->toDateTimeString(),
            ],
            [
                'id_product' => 3,
                'name_product' => 'Keyboard Keychron K6',
                'price_product' => 1800000,
                'stock_product' => 15,
                'created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                'id_product' => 4,
                'name_product' => 'Monitor Dell UltraSharp',
                'price_product' => 5000000,
                'stock_product' => 8,
                'created_at' => Carbon::now()->subHours(5)->toDateTimeString(),
            ],
            [
                'id_product' => 5,
                'name_product' => 'Headset HyperX Cloud II',
                'price_product' => 1500000,
                'stock_product' => 20,
                'created_at' => Carbon::now()->subDays(3)->toDateTimeString(),
            ],
            [
                'id_product' => 6,
                'name_product' => 'SSD Samsung 970 EVO',
                'price_product' => 2000000,
                'stock_product' => 30,
                'created_at' => Carbon::now()->subHours(10)->toDateTimeString(),
            ],
            [
                'id_product' => 7,
                'name_product' => 'RAM Corsair Vengeance 16GB',
                'price_product' => 1200000,
                'stock_product' => 18,
                'created_at' => Carbon::now()->subDays(4)->toDateTimeString(),
            ],
            [
                'id_product' => 8,
                'name_product' => 'Power Supply EVGA 600W',
                'price_product' => 900000,
                'stock_product' => 12,
                'created_at' => Carbon::now()->subHours(20)->toDateTimeString(),
            ],
            [
                'id_product' => 9,
                'name_product' => 'Motherboard MSI B450',
                'price_product' => 1500000,
                'stock_product' => 14,
                'created_at' => Carbon::now()->subDays(5)->toDateTimeString(),
            ],
            [
                'id_product' => 10,
                'name_product' => 'CPU AMD Ryzen 5 3600',
                'price_product' => 3000000,
                'stock_product' => 9,
                'created_at' => Carbon::now()->subHours(15)->toDateTimeString(),
            ]
        ];

        return view('product.index', compact('products'));
    }
}
