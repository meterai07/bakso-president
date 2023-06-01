@extends('dashboard.layouts.main')

@section('title', ' Menu')

@section('content')
    <div class="h-screen bg-primary-50">
        <a href="/admin/dashboard" class="text-blue-500 hover:text-blue-700">Kembali</a>
        <a href="/admin/menu/create" class="py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white rounded mb-4">Tambah Menu</a>
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-2xl font-bold p-8">List Menu</h1>
            <table class="table-fixed text-center">
                <thead>
                <tr>
                    <th class="border p-4 border-collapse border-primary-500 w-[200px] bg-primary-500 text-primary-50">Nama</th>
                    <th class="border p-4 border-collapse border-primary-500 w-[200px] bg-primary-500 text-primary-50">Kategori</th>
                    <th class="border p-4 border-collapse border-primary-500 w-[200px] bg-primary-500 text-primary-50">Deskripsi</th>
                    <th class="border p-4 border-collapse border-primary-500 w-[200px] bg-primary-500 text-primary-50">Harga</th>
                    <th class="border p-4 border-collapse border-primary-500 w-[200px] bg-primary-500 text-primary-50">Gambar</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $menu)
                    <tr>
                        <td class="border p-2  border-collapse border-primary-500">{{ $menu->name }}</td>
                        <td class="border p-2 border-collapse border-primary-500">{{ $menu->category->name }}</td>
                        <td class="border p-2 border-collapse border-primary-500">{{ $menu->description }}</td>
                        <td class="border p-2 border-collapse border-primary-500">{{ $menu->price }}</td>
                        <td class="border p-2 border-collapse border-primary-500">
                            <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" width="200">
                        </td>
                        <td class="pl-4 border-collapse border-primary-500">
                            <a class="text-base font-semibold text-primary-500 hover:text-primary-300 hover:duration-300" href="/admin/menu/update/{{ $menu->id }}">
                                Update
                            </a>
                        </td>
                        <td class="pl-2">|</td>
                        <td class="pl-2 border-collapse border-primary-500">
                            <a class="text-base font-semibold text-primary-500 hover:text-primary-300 hover:duration-300" href="/admin/menu/delete/{{ $menu->id }}">
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    


@endsection