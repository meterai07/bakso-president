{{-- Card Menu --}}
<div class="w-auto flex flex-col shadow-lg rounded-2xl">
    {{-- Picture Menu --}}
    @if (!@empty($menu->image))
        <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" class="w-full h-80 object-cover object-center rounded-t-2xl">
    @else
        <img src="../assets/img/menu-empty.svg" class="w-full h-80 object-cover object-center rounded-t-2xl">
    @endif
    {{-- Content Menu --}}
    {{-- <div class="flex flex-col gap-4 p-6">
        <div class="flex flex-col gap-2">
            <h1 class="font-lora font-bold text-2xl text-neutral-900">{{ $menu->name }}</h1>
            <p class="text-base text-neutral-700">{{ $menu->description }}</p>
        </div>
        <h2 class="font-lora font-semibold text-xl text-primary-500">Rp {{ $menu->price }}</h2>
        <a class="block cursor-pointer py-3 px-6 rounded-lg bg-primary-500 text-base text-center font-semibold text-neutral-50 hover:bg-primary-600 hover:duration-500 add-menu">Add Menu</a>
    </div> --}}
    <div class="flex flex-col gap-4 p-6">
        <div class="flex flex-col gap-2">
            <h1 class="font-lora font-bold text-2xl text-neutral-900">{{ $menu->name }}</h1>
            <p class="text-base text-neutral-700">{{ $menu->description }}</p>
        </div>
        <h2 class="font-lora font-semibold text-xl text-primary-500">Rp {{ $menu->price }}</h2>
        {{-- <a class="block cursor-pointer py-3 px-6 rounded-lg bg-primary-500 text-base text-center font-semibold text-neutral-50 hover:bg-primary-600 hover:duration-500 add-menu">Add Menu</a> --}}
        <input type="number" name="quantity" id="quantity" class="w-1/2 h-12 rounded-lg border border-neutral-300 text-base text-center font-semibold text-neutral-900" placeholder="Quantity">
    </div>
</div>
