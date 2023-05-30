@extends('order.layouts.main')

@section('title', 'Order Menu')

{{-- Main Page Order --}}
@section('order')
<div class="mt-32 w-full">
    {{-- Header --}}
    <div class="w-auto mx-[100px] py-12 rounded-[48px] bg-cover bg-center" style="background-image: url(../assets/img/order-bg.png)">
        <div class="flex flex-col gap-6 items-center justify-center">
            <h1 class="font-bold font-lora text-5xl text-center">Various Menus Are Served Special For You</h1>
            <a href="/order" class="py-3 px-6 rounded-lg border border-neutral-50 text-base text-center font-semibold text-neutral-50 hover:bg-neutral-50 hover:text-primary-500 hover:duration-500">Explore Menu</a>
        </div>
    </div>

    {{-- Content --}}
    <div class="grid grid-cols-4 w-auto mx-[100px] gap-6 mt-6">
        <h2 class="font-lora font-bold text-4xl col-span-4">Make a order</h2>
        <form action="/order/add" method="post">
            @csrf
            @foreach($menus as $menu)
                <p>{{ $menu->name }}</p>
                <input type="number" name="order-quantity" id="order-quantity" class="w-1/2 h-12 rounded-lg border border-neutral-300 text-base text-center font-semibold text-neutral-900" placeholder="Quantity">
            @endforeach
            <button type="submit" class="py-3 px-6 rounded-lg border border-primary-500 text-base text-center font-semibold text-neutral-50 hover:bg-neutral-50 hover:text-primary-500 hover:duration-500">Order Menu</button>
        </form>
        @foreach($categories as $category)
        <h2 class="font-lora font-bold text-4xl col-span-4 mt-6">{{ $category->name }}</h2>
            @foreach($menus as $menu)
                @if($menu->category_id == $category->id)
                    @include('order.components.card')
                @endif
            @endforeach
        @endforeach
    </div>
</div>

<script>
    function setOrderQuantity() {
        var quantities = document.getElementsByName('quantity');
        var orderQuantities = document.getElementsByName('order-quantity');

        for (var i = 0; i < quantities.length; i++) {
            orderQuantities[i].value = quantities[i].value;
        }
    }
</script>
@endsection
