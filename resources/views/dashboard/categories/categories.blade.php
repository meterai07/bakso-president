@extends('dashboard.layouts.main')

@section('title', ' Category')

@section('content')
  <a href="/admin/dashboard" class="text-blue-500 hover:text-blue-700">Kembali</a>
  <a href="/admin/categories/create" class="py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white rounded mb-4">Tambah Category</a>
  <h1 class="text-2xl font-bold mb-4">Halaman Category</h1>

  <div class="border border-gray-300 rounded">
      <div class="flex items-center bg-gray-200 py-2 px-4 bg-primary-200">
          <div class="w-1/4">Nama kategori</div>
          <div class="w-1/4">Aksi</div>
      </div>
      @foreach($categories as $category)
        <div class="flex items-center py-2 px-4">
          <div class="w-1/4">{{ $category->name }}</div>
          <div class="w-1/4">
              <a href="/admin/categories/update/{{ $category->id }}" class="text-blue-500 hover:text-blue-700">Update Category |</a>
              <a href="/admin/categories/delete/{{ $category->id }}" class="text-red-500 hover:text-red-700"> Delete Category</a>
          </div>
        </div>
      @endforeach
  </div>
@endsection