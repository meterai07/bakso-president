@extends('order.layouts.main')

@section('title', 'Order Menu')

@section('order')
<div class="mt-32 w-full">
    {{-- Header --}}
    <div class="w-auto mx-[100px] py-12 rounded-[48px] bg-cover bg-center" style="background-image: url(../assets/img/order-bg.png)">
        <div class="flex flex-col gap-6 items-center justify-center">
            <h1 class="font-bold font-lora text-5xl text-center">Various Menus Are Served Special For You</h1>
            <a href="/order" class="py-3 px-6 rounded-lg bg-neutral-50 text-base font-semibold text-primary-500 hover:bg-primary-200 hover:duration-500">Order Menu</a>
        </div>
    </div>
    {{-- Tabs Filter --}}
    {{-- Content --}}
    <div class="grid grid-cols-4 w-auto mx-[100px] gap-6">
        <h2 class="font-lora font-bold text-4xl col-span-4 mt-6">Main Course</h2>
        @include('order.components.card')
        <h2 class="font-lora font-bold text-4xl col-span-4 mt-6">Add Ons</h2>
        @include('order.components.card')
    </div>
</div>


{{-- </div>
    <div class="flex flex-col gap-6 w-4/5 h-60 mx-auto bg-primary-500 items-center justify-center rounded-[48px] mt-32">
        <h1 class="font-lora font-bold text-[40px] text-center">Various Menus Are Served Special For You</h1>
        <a href="" class="py-3 px-6 bg-neutral-50 text-primary-500 rounded-lg font-semibold text-base">Explore Our Menu</a>
    </div>

    <div class="flex gap-4 justify-center items-center w-4/5 mt-12 mb-6 mx-auto">
        <a href="" class="py-2 px-4 bg-primary-100 border border-primary-500 text-primary-500 rounded-3xl">All</a>
        <a href="" class="py-2 px-4 border border-neutral-500 text-neutral-500 rounded-3xl">Main Course</a>
        <a href="" class="py-2 px-4 border border-neutral-500 text-neutral-500 rounded-3xl">Add Ons</a>
    </div>

    <div class="grid grid-cols-4 w-4/5 mx-auto">
        <h2 class="font-lora text-[40px] font-bold col-span-4">Main Course</h2>
            @include('order.components.card')
        <h2 class="font-lora text-[40px] font-bold col-span-4">Add Ons</h2>
    </div> --}}

    {{-- <div class="w-4/5 bg-primary-500 flex flex-row items-center justify-between py-6 px-32 fixed bottom-12 left-1/2 -translate-x-1/2 rounded-full">
        <div class="flex flex-col">
            <p class="text-2xl font-bold font-lora text-neutral-50">Rp 10.000</p>
        </div>
        <a href="" class="bg-neutral-50 text-primary-500 py-4 px-12 rounded-lg w-fit h-fit text-base font-semibold">Order</a>
    </div> --}}
@endsection

<script>
    // navbar scroll
    let prevScrollpos = window.pageYOffset;

    window.onscroll = function() {
        let currentScrollPos = window.pageYOffset;

        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
            document.getElementById("navbar").style.backgroundColor = "#FAFAFA";
            document.getElementById("navbar").style.zIndex = 100;
        } else {
            document.getElementById("navbar").style.top = "-100px";
        }
        prevScrollpos = currentScrollPos;
    }
</script>
