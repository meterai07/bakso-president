@extends('dashboard.layouts.main', ['page' => 'categories'])

@section('title', ' Category')

@section('content')
  <div class="h-screen bg-primary-50">
        <a href="/admin/dashboard" class="flex text-blue-500 hover:text-blue-700 items-center ml-12 pt-4 gap-2 font-semibold w-8">
            <img src="../assets/icons/chevron-left.svg" alt="">
            Kembali
        </a>
        <div class="flex flex-col items-center justify-center gap-8">
            <h1 class="text-2xl font-bold">List Category</h1>
            <table class="table-fixed text-center">
                <thead>
                  <tr>
                      <th class="border p-4 border-collapse border-primary-500 w-[200px] bg-primary-500 text-primary-50">Nama Kategori</th>
                      <th class="border p-4 border-collapse border-primary-500 w-[400px] bg-primary-500 text-primary-50">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td class="border p-2  border-collapse border-primary-500">{{ $category->name }}</td>
                        <td class="flex items-center justify-evenly border border-collapse border-primary-500 gap-2 p-4">
                            <a class="text-base font-semibold text-primary-500 hover:text-primary-300 hover:duration-300" href="/admin/categories/update/{{ $category->id }}">
                                Update 
                            </a>
                            <a class="text-base font-semibold text-primary-500 hover:text-primary-300 hover:duration-300" href="/admin/categories/delete/{{ $category->id }}" data-confirm-delete="true">
                                Hapus
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/admin/categories/create" class="py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white rounded mb-4 bg-primary-500 text-neutral-50 text-base">Tambah Kategori</a>
        </div>
    </div>
@endsection