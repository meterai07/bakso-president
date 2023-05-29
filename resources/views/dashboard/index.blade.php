@extends('dashboard.layouts.main')

@section('title', 'Dashboard')

@section('content')
    <h1>Berhasil Masuk</h1>
    <p>Hello, {{ auth()->user()->name }}</p>

    <a href="/admin/menu">Menu</a> | <a href="/admin/categories">Categories</a> | <a href="/admin/logout">Logout</a>
@endsection
