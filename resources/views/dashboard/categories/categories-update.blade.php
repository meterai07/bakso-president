@extends('dashboard.layouts.main')

@section('title', ' Update Category')

@section('content')
    <a href="/admin/categories" class="text-blue-500 hover:text-blue-700">Kembali ke halaman kategori</a>
    <div class="flex items-center justify-center w-full min-h-screen">
        <form action="/admin/categories/update/{{ $category->id }}" method="post" class="w-full max-w-sm mx-auto">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Kategori</label>
                <input type="text" name="name" id="name" placeholder="Nama Category" value={{ $category->name }} class="appearance-none border border-gray-300 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:border-blue-500">
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update Kategori</button>
            </div>
        </form>  
    </div> 
@endsection