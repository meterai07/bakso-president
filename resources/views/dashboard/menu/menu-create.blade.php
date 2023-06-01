@extends('dashboard.layouts.main')

@section('title', ' Menu Create')

@section('content')
<div class="h-screen bg-primary-50">
  <a href="/admin/menu" class="flex text-blue-500 hover:text-blue-700 items-center ml-12 pt-4 gap-2 font-semibold w-8">
    <img src="/assets/icons/chevron-left.svg" alt="">
    Kembali
  </a>
  <div class="flex items-center justify-center">
    <div class="flex flex-col bg-cover items-center justify-center w-[500px] h-[600px] py-4" style="background-image: url(/assets/img/login-bg.svg)">
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
        <div class="text-center bg-primary-500 rounded-lg shadow-lg text-neutral-50 hover:bg-primary-600 hover:">
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Tambah Menu</button>
        </div>
      </form>  
    </div>
  </div>    
</div>
@endsection