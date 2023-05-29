@extends('dashboard.layouts.main')

@section('title', ' Menu Create')

@section('content')
    {{-- <form action="/admin/menu/create" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="name" placeholder="Nama Menu">
        <input type="text" name="description" id="description" placeholder="Deskripsi Menu">
        <input type="number" name="price" id="price" placeholder="Harga Menu">
        <input type="file" name="image" id="image" placeholder="Gambar Menu">
        <button type="submit">Tambah Menu</button>
    </form> --}}
    <a href="/admin/menu" class="text-blue-500 hover:text-blue-700">Kembali ke halaman menu</a>
    <div class="flex items-center justify-center w-full min-h-screen">
    <form action="/admin/menu/create" method="post" enctype="multipart/form-data" class="w-full max-w-sm mx-auto">
        @csrf
        <div class="mb-4">
          <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Menu</label>
          <input type="text" name="name" id="name" placeholder="Nama Menu" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
          @foreach($categories as $category)
            <input type="radio" name="category_id" id="category_id" value="{{ $category->id }}" class="mr-1">
            <label for="category_id" class="text-gray-700 text-sm font-bold mb-2">{{ $category->name }}</label>
          @endforeach
        </div>
        <div class="mb-4">
          <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi Menu</label>
          <input type="text" name="description" id="description" placeholder="Deskripsi Menu" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
          <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Harga Menu</label>
          <input type="number" name="price" id="price" placeholder="Harga Menu" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
          <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Gambar Menu</label>
          <input type="file" name="image" id="image" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:border-blue-500">
        </div>
        <div class="text-center">
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Tambah Menu</button>
        </div>
      </form>  
    </div>    
@endsection