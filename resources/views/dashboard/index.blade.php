@extends('dashboard.layouts.main')

@section('title', 'Dashboard')

@section('content')
    <h1>Berhasil Masuk</h1>
    <p>Hello, {{ auth()->user()->name }}</p>

    <a href="/admin/menu">Menu</a> | <a href="/admin/categories">Categories</a> | <a href="/admin/logout">Logout</a>

    @foreach($transactions as $transaction)
        @if ($transaction->status == 'pending')
            <h1>transaksi id = {{ $transaction->id }} | {{ $transaction->status }} | <a href="/admin/order/details/{{ $transaction->id }}">Details Order</a></h1>
        @endif
        {{-- <h1>transaksi id = {{ $transaction->id }} || {{ $transaction->status }} | <a href="/admin/order/update/{{ $transaction->id }}">Selesai</a> || <a href="/admin/order/details/{{ $transaction->id }}">Details Order</a></h1> --}}
        {{-- <h1>{{ $transaction->user->name }}</h1> --}}
        {{-- <p>{{ $transaction->menu->name }}</p>
        <p>{{ $transaction->quantity }}</p>
        <p>{{ $transaction->total }}</p>
        <p>{{ $transaction->status }}</p> --}}
    @endforeach
@endsection
