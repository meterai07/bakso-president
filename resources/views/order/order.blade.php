@extends('order.layouts.main')

@section('title', 'Order Menu')

@section('order')
    <div class="flex flex-col gap-6 w-4/5 h-60 mx-auto bg-primary-500 items-center justify-center rounded-[48px] mt-12">
        <h1 class="font-lora font-bold text-[40px] text-center">Various Menus Are Served Special For You</h1>
        <a href="" class="py-3 px-6 bg-neutral-50 text-primary-500 rounded-lg font-semibold text-base">Explore Our Menu</a>
    </div>
    <div class="flex gap-4 justify-center items-center w-full mt-12 mb-6">
        <a href="" class="py-2 px-4 bg-primary-100 border border-primary-500 text-primary-500 rounded-3xl">All</a>
        <a href="" class="py-2 px-4 border border-neutral-500 text-neutral-500 rounded-3xl">Main Course</a>
        <a href="" class="py-2 px-4 border border-neutral-500 text-neutral-500 rounded-3xl">Add Ons</a>
    </div>
    <div class="grid grid-cols-4 mx-auto w-fit gap-12">
        <h2 class="font-lora text-[40px] font-bold col-span-4">Main Course</h2>
            @include('order.partials.card')
        <h2 class="font-lora text-[40px] font-bold col-span-4">Add Ons</h2>
    </div>
    <div class="flex flex-row bg-primary-500 items-center">
        <div class="flex flex-col py-4 px-24  text-neutral-50">
            <p>2 Item</p>
            <p>Rp 10.000</p>
        </div>
        <a href="" class="bg-neutral-50 text-primary-500 py-4 px-12 rounded-lg w-fit h-fit">Order</a>
    </div>
@endsection
