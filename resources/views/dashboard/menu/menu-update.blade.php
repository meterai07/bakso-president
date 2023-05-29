@extends('dashboard.layouts.main')

@section('title', ' Menu Update')

@section('content')
    <h1>Halaman Update</h1>
    {{-- <form action="/admin/menu/update/{{ $menu->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="name" placeholder="Nama Menu" value="{{ $menu->name }}">
        <input type="text" name="description" id="description" placeholder="Deskripsi Menu" value="{{ $menu->description }}">
        <input type="number" name="price" id="price" placeholder="Harga Menu" value="{{ $menu->price }}">
        <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" width="200">
        <input type="file" name="image" id="image" placeholder="Gambar Menu">
        <button type="submit">Update Menu</button>
    </form> --}}
    <form action="/admin/menu/update/{{ $menu->id }}" method="post" enctype="multipart/form-data" class="w-full max-w-sm mx-auto">
        @csrf
        <div class="mb-4">
          <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Menu</label>
          <input type="text" name="name" id="name" placeholder="Nama Menu" value="{{ $menu->name }}" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
          @foreach($categories as $category)
            <input type="radio" name="category_id" id="category_id" value="{{ $category->id }}" {{ $menu->category_id == $category->id ? 'checked' : '' }}>
            <label for="category_id" class="mr-2">{{ $category->name }}</label>
          @endforeach
        </div>
        <div class="mb-4">
          <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi Menu</label>
          <input type="text" name="description" id="description" placeholder="Deskripsi Menu" value="{{ $menu->description }}" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
          <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Harga Menu</label>
          <input type="number" name="price" id="price" placeholder="Harga Menu" value="{{ $menu->price }}" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
          <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" class="mb-2" width="200">
          <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Gambar Menu</label>
          <input type="file" name="image" id="image" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:border-blue-500">
        </div>
        <div class="text-center">
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update Menu</button>
        </div>
      </form>      
@endsection