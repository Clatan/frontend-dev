@extends('layouts.app')

@section('title', 'Management Product')

@section('content')
    <img src="/logo.svg" alt="logo" class="mx-auto my-6">
    <div class="flex flex-col md:flex-row justify-center text-center gap-3">
        <p class="text sm:text-5xl md:text-4xl lg:text-5xl sm:-mb-3 -mb-5 text-5xl">Welcome to</p>
        <p class="text-1 sm:text-5xl md:text-4xl lg:text-5xl text-5xl">Management Product</p>
    </div>

    <div class="subtext px-2 sm:px-20 md:px-42 lg:px-48 mb-8">
        <p class="text-center">Kelola produkmu dengan mudah dan efisien!</p>
        <p class="text-justify">Di sini kamu dapat menambahkan, mengedit, dan menghapus data produk secara praktis menggunakan antarmuka yang sederhana dan responsif. Yuk mulai kelola produkmu — lihat daftar produk di menu Manage Product atau tambahkan produk baru lewat Add Product. Semua bisa dilakukan dengan cepat dan mudah!</p>
    </div>

    <div class="grid grid-cols-2 gap-8">
      <a href="{{ route('product.index') }}" class="bg-blue-500 text-white px-12 py-8 rounded-xl border-2 border-blue-500 hover:bg-red-800 flex font-semibold justify-center hover:border-2 hover:border-red-500">
          Manage Product
      </a>
      <a href="{{ route('add.product') }}" class="bg-blue-500 text-white px-12 py-8 rounded-xl border-2 border-blue-500 hover:bg-red-800 flex font-semibold justify-center hover:border-2 hover:border-red-500">
          Add Product
      </a>
    </div>
@endsection