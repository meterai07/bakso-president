@extends('dashboard.layouts.main', ['page' => 'categories-create'])

@section('title', ' Create Category')

@section('content')
<div class="h-screen bg-primary-50">
    <a href="/admin/categories" class="flex text-blue-500 hover:text-blue-700 items-center ml-12 pt-4 gap-2 font-semibold w-8">
        <img src="/assets/icons/chevron-left.svg" alt="">
        Kembali
    </a>
    <div class="flex items-center justify-center mt-auto mb-auto">
        <div class="flex flex-col bg-cover items-center justify-center w-[500px] h-fit py-12 gap-4 shadow-lg rounded-[50px]" style="background-image: url(/assets/img/login-bg.svg)">
        <h1 class="text-3xl font-extrabold text-neutral-900 font-lora">Tambah Kategori</h1>
        <form action="/admin/categories/create" method="post" enctype="multipart/form-data" class="w-full max-w-sm mx-auto">
            @csrf
            <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Kategori</label>
            <input type="text" name="name" id="name" placeholder="Nama Category" class="px-4 py-2 border border-neutral-200 rounded-lg shadow-md w-full focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-transparent focus:duration-500">
            </div>
            <div class="text-center ml-auto mr-auto bg-primary-500 mt-4 rounded-lg shadow-lg w-fit text-neutral-50 hover:bg-primary-600 hover:duration-500">
            <button type="submit" class=" bg-blue-500 hover:bg-blue-700 text-neutral-900 py-2 px-4 rounded focus:outline-none focus:shadow-outline">Confirm</button>
            </div>
        </form>  
    </div>    
</div>
@endsection
