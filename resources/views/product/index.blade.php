@extends('layouts.app')

@section('title', 'Product List')

@section('content')
    <h1 class="text">Product List</h1>
    <a href="{{ route('add.product') }}" class="mb-4 bg-blue-500 text-white px-12 py-2 rounded-xl border-2 border-blue-500 hover:bg-red-800 flex font-semibold justify-center hover:border-2 hover:border-red-500">
          Tambah Produk
    </a>
    <table id="productTable" class="table-auto w-full border-collapse rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-600 px-4 py-2">ID</th>
                <th class="border border-gray-600 px-4 py-2">Name</th>
                <th class="border border-gray-600 px-4 py-2">Price</th>
                <th class="border border-gray-600 px-4 py-2">Stock</th>
                <th class="border border-gray-600 px-4 py-2">Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td class="border border-gray-600 px-4 py-2 text-white">{{ $product['id_product'] }}</td>
                <td class="border border-gray-600 px-4 py-2 text-white">{{ $product['name_product'] }}</td>
                <td class="border border-gray-600 px-4 py-2 text-white">Rp {{ number_format($product['price_product'], 0, ',', '.') }}</td>
                <td class="border border-gray-600 px-4 py-2 text-white">{{ $product['stock_product'] }}</td>
                <td class="border border-gray-600 px-4 py-2 text-white">{{ $product['created_at'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script src="./js/product.js"></script>

@endsection