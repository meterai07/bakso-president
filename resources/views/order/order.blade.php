@extends('order.layouts.main')

@section('title', 'Order Menu')

{{-- Main Page Order --}}
@section('order')
<div class="mt-32 w-full">
    {{-- Header --}}
    <div class="w-auto mx-[100px] py-12 rounded-[48px] bg-cover bg-center" style="background-image: url(../assets/img/order-bg.png)">
        <div class="flex flex-col gap-6 items-center justify-center">
            <h1 class="font-bold font-lora text-5xl text-center">Various Menus Are Served Special For You</h1>
            <a href="/order" class="py-3 px-6 rounded-lg border border-neutral-50 text-base text-center font-semibold text-neutral-50 hover:bg-neutral-50 hover:text-primary-500 hover:duration-500">Order Menu</a>
        </div>
    </div>

    {{-- Content --}}
    <div class="grid grid-cols-4 w-auto mx-[100px] gap-6 mt-6">
        <h2 class="font-lora font-bold text-4xl col-span-4 mt-6">Main Course</h2>
        @foreach ($menus as $menu)
            @if ($menu->category_id == 1)
                @include('order.components.card')
            @endif
        @endforeach
        <h2 class="font-lora font-bold text-4xl col-span-4 mt-6">Add Ons</h2>
        @foreach ($menus as $menu)
            @if ($menu->category_id == 2)
                @include('order.components.card')
            @endif
        @endforeach
    </div>
</div>
@endsection
