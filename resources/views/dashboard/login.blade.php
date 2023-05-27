@extends('layouts.main')

@section('title', 'Login Admin')

@section('content')

<form action="/admin" method="post">
    @csrf
    <div class="flex flex-col items-center justify-center h-screen">
        <div class="flex flex-col items-center justify-center w-96 bg-white rounded-lg shadow-lg">
            <div class="flex flex-col items-center justify-center w-full p-6">
                <h1 class="text-3xl font-bold text-gray-900">Login Admin</h1>
                <p class="mt-2 text-sm text-gray-600">Masukkan email dan password anda</p>
            </div>

            @if(session('error'))
            <div class="flex items-center justify-center w-full p-4 mb-4 text-red-500 bg-red-100 rounded-lg">
                {{ session('error') }}
            </div>
            @endif

            <div class="flex flex-col w-full p-6 space-y-6">
                <input type="email" name="email" id="email" placeholder="Email" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-transparent">
                <input type="password" name="password" id="password" placeholder="Password" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-transparent">
                <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Login</button>
            </div>
        </div>
    </div>
</form>

@endsection