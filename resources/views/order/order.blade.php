@extends('order.layouts.main')

@section('title', 'Order Menu')

@section('order')
<div class="flex flex-col gap-6 px-[100px] my-24">
    <div class="w-full h-60 bg-cover bg-center flex items-center justify-center rounded-3xl" style="background-image: url('../assets/img/order-bg.svg')">
        <h1 class="font-lora font-bold text-5xl text-neutral-900">Order Menu</h1>
    </div>
    <div class="grid grid-cols-4 w-full gap-6">
        @foreach($categories as $category)
        <h2 class="font-lora font-bold text-3xl col-span-4">{{ $category->name }}</h2>
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
    let quantities = document.getElementsByName('quantity');
    let orderQuantities = document.getElementsByName('order-quantity');
    for (let i = 0; i < quantities.length; i++) {
        if (quantities[i].value > 0) {
            orderQuantities[i].parentNode.parentNode.style.display = 'flex';
        } else {
            orderQuantities[i].parentNode.parentNode.style.display = 'none';
        }
    }
}

function decrementQuantity(menuId) {
    const quantityInput = document.getElementById(`quantity-${menuId}`);
    const orderQuantityInput = document.getElementById(`order-quantity-${menuId}`);
    let quantity = parseInt(quantityInput.value);
    if (quantity > 0) {
        quantity--;
        quantityInput.value = quantity;
        orderQuantityInput.value = quantity;
    }
    setOrderQuantity(); // Call setOrderQuantity() after updating quantity values
}

function incrementQuantity(menuId) {
    const quantityInput = document.getElementById(`quantity-${menuId}`);
    const orderQuantityInput = document.getElementById(`order-quantity-${menuId}`);
    let quantity = parseInt(quantityInput.value);
    quantity++;
    quantityInput.value = quantity;
    orderQuantityInput.value = quantity;
    setOrderQuantity(); // Call setOrderQuantity() after updating quantity values
}
</script>
@endsection
