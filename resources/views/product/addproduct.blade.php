@extends('layouts.app')

@section('title', 'Add Product')

@section('content')
    <h1 class="text">Add New Product</h1>
    <form action="{{ route('add.product') }}" method="POST" class="max-w-lg mx-auto bg-gray-700 border-2 border-gray-600 p-6 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="name_product" class="block text-white font-semibold mb-2">Product Name:</label>
            <input type="text" id="name_product" name="name_product" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" required>
        </div>
        <div class="mb-4">
            <label for="price_product" class="block text-white font-semibold mb-2">Price:</label>
            <input type="number" id="price_product" name="price_product" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" required>
        </div>
        <div class="mb-4">
            <label for="stock_product" class="block text-white font-semibold mb-2">Stock:</label>
            <input type="number" id="stock_product" name="stock_product" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" required>
        </div>
        <div class="mt-4 flex gap-4 justify-center w-full">
            <button type="submit" class="w-full bg-blue-500 border-2 border-blue-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 hover:border-2 hover:border-gray-500">Simpan</button>
            <button type="submit" class="w-full bg-red-600 border-2 border-red-600 text-white px-4 py-2 rounded-md hover:bg-gray-600 hover:border-2 hover:border-gray-500">Batal</button>
        </div>
    </form>

@endsection