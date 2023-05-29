@extends('dashboard.layouts.main')

@section('title', ' Menu')

@section('content')
    <a href="/admin/dashboard">kembali</a>
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
    @endforeach

@endsection