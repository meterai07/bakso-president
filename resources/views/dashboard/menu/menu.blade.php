@extends('dashboard.layouts.main')

@section('title', ' Menu')

@section('content')
    {{-- <a href="/admin/dashboard">kembali</a>
    <h1>Halaman Menus</h1>
    <a href="/admin/menu/create">Tambah Menu</a>

    @foreach ($menus as $menu)
        <h1>{{ $menu->name }}</h1>
        <a href="/admin/menu/update/{{ $menu->id }}">Update Menu</a>
        <a href="/admin/menu/delete/{{ $menu->id }}">Delete Menu</a>
        <p>{{ $menu->description }}</p>
        <p>{{ $menu->price }}</p>
        <p>{{ $menu->image }}</p> 
        <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" width="200">
    @endforeach --}}

    <a href="/admin/dashboard" class="text-blue-500 hover:text-blue-700">Kembali</a>
    <a href="/admin/menu/create" class="py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white rounded mb-4">Tambah Menu</a>
    <h1 class="text-2xl font-bold mb-4">Halaman Menus</h1>

    <div class="border border-gray-300 rounded">
        <div class="flex items-center bg-gray-200 py-2 px-4 bg-primary-200">
            <div class="w-1/4">Nama</div>
            <div class="w-1/4">Deskripsi</div>
            <div class="w-1/4">Harga</div>
            <div class="w-1/4">Gambar</div>
            <div class="w-1/4">Aksi</div>
        </div>

        @foreach ($menus as $menu)
            <div class="flex items-center py-2 px-4">
                <div class="w-1/4">{{ $menu->name }}</div>
                <div class="w-1/4">{{ $menu->description }}</div>
                <div class="w-1/4">{{ $menu->price }}</div>
                <div class="w-1/4">
                    <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" width="200">
                </div>
                <div class="w-1/4">
                    <a href="/admin/menu/update/{{ $menu->id }}" class="text-blue-500 hover:text-blue-700">Update Menu |</a>
                    <a href="/admin/menu/delete/{{ $menu->id }}" class="text-red-500 hover:text-red-700"> Delete Menu</a>
                </div>
            </div>
        @endforeach
    </div>


@endsection