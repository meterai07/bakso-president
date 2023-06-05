<div class="flex flex-col gap-0 bg-neutral-50 rounded-2xl shadow-md">
    @if (!empty($menu->image))
        <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" class="h-60 w-full object-cover object-center rounded-t-2xl">
    @else
        <img src="../assets/img/menu-empty.svg" class="h-60 w-full object-cover object-center rounded-t-2xl">
    @endif
    <div class="flex flex-col p-6 gap-6">
        <div class="flex flex-col gap-2">
            <div class="flex flex-col gap-0">
                <h1 class="font-lora font-bold text-2xl text-neutral-900">{{ $menu->name }}</h1>
                <p class="font-normal text-base text-neutral-500">{{ $menu->description }}</p>
            </div>
            <h2 class="font-lora font-bold text-xl text-primary-500">Rp {{ $menu->price }}</h2>
        </div>
        <div class="flex gap-4 items-center justify-center">
            <button onclick="decrementQuantity('{{ $menu->id }}')" class="p-3 bg-primary-500 rounded-full duration-100 hover:bg-primary-600 "><img src="../assets/icons/minus.svg" alt=""></button>
            <input type="number" name="quantity" id="quantity-{{ $menu->id }}" value="0" min="0" class="w-full h-full outline-none bg-transparent text-center font-semibold" readonly>
            <button onclick="incrementQuantity('{{ $menu->id }}')" class="p-3 bg-primary-500 rounded-full duration-100 hover:bg-primary-600 "><img src="../assets/icons/plus.svg" alt=""></button>
        </div>
    </div>
</div>
