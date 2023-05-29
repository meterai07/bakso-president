@extends('dashboard.layouts.main')

@section('title', ' Login')

@section('content')

<form action="/admin" method="post">
    @csrf
    <div class="flex flex-col items-center justify-center h-screen bg-primary-100 shadow-2xl">
        <div class="flex flex-col items-center justify-center w-96 bg-cover rounded-[30px] shadow-lg p-5" style="background-image: url(../assets/img/login-bg.svg)">
            <img class="w-30 p-4" src="../assets/img/Logo.svg" alt="">
            <div class="flex flex-col items-center justify-center w-full pt">
                <h1 class="text-3xl font-extrabold text-neutral-900 font-lora">Login Admin</h1>
            </div>

            <div class="flex flex-col w-full p-6 space-y-6">
                <input type="email" name="email" id="email" placeholder="Email" class="px-4 py-2 border border-neutral-200 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-transparent focus:duration-500" required>
                <input type="password" name="password" id="password" placeholder="Password" class="px-4 py-2 border border-neutral-200 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-transparent focus:duration-500" required>
                <button type="submit" class="px-4 py-2 text-primary-900 shadow-lg rounded-lg hover:shadow-2xl hover:text-primary-50 hover:duration-300">Login</button>
            </div>
        </div>
    </div>
</form>

@endsection